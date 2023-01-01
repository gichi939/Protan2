<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = "/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
        } catch (Exception $e) {
            return redirect('/login');
        }

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($providerUser, $provider)
    {
        $account = IdentityProvider::whereProviderName($provider)
                    ->whereProviderId($providerUser->getId())
                    ->first();

        if ($account) {
            return $account->user;
        } else {
            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name'  => $providerUser->getName(),
                ]);
            }

            $user->IdentityProviders()->create([
                'provider_id'   => $providerUser->getId(),
                'provider_name' => $provider,
            ]);

            return $user;
        }
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([ // 入力内容のチェック
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) { // ログイン試行
            if ($request->user('admin')?->admin_level > 0) { // 管理権限レベルが0でないか
                $request->session()->regenerate(); // セッション更新

                return redirect()->intended('admin/dashboard'); // ダッシュボードへ
            } else {
                Auth::guard('admin')->logout(); // if文でログインしてしまっているので、ログアウトさせる

                $request->session()->regenerate(); // セッション更新

                return back()->withErrors([ // 権限レベルが0の場合
                    'error' => 'You do not have permission to log in.',
                ]);
            }
        }

        return back()->withErrors([ // ログインに失敗した場合
            'error' => 'The provided credentials do not match our records.',
        ]);
    }
}
