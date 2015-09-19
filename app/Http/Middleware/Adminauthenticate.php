<?php
/**
 * Created by PhpStorm.
 * User: trust.okoroego
 * Date: 9/18/15
 * Time: 5:18 AM
 */

namespace App\Http\Middleware;


    use Closure;
    use Illuminate\Contracts\Auth\Guard;
    use App\antrasoft\models\User;
    use Auth;

class Adminauthenticate
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $adminauth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $adminauth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->adminauth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($this->adminauth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }

        $email = $request->input("email");

        $email = Auth::user()->email;
        if(User::where("email",$email)->where('usertype','admin')->count() < 1)
        {
            dd('user is not admin take him to the website login page');
            //take the user to normal login page
            //return redirect()->guest('login');

        }
        return $next($request);
    }
}
