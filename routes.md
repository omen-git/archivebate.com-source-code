GET|HEAD   / ----------------------------------------------------------------------------- index › VideoController@index   |
GET|HEAD   2257 -------------------------------------------------------------------------- usc › PageController@usc   |
GET|HEAD   account ----------------------------------------------------------------------- account › ProfileController@index   |
POST       account ----------------------------------------------------------------------- account-store › ProfileController@store   |
DELETE     account ----------------------------------------------------------------------- account-destroy › ProfileController@destroy   |
GET|HEAD   account/delete/success -------------------------------------------------------- account-remove › ProfileController@removed   |
POST       account/password -------------------------------------------------------------- account-password › ProfileController@passwordUpdate   |
GET|HEAD   add-streamer ------------------------------------------------------------------ add_streamer › StreamerController@create   |
POST       api/v1/report ----------------------------------------------------------------- video-report › Api\AjaxEventController@reportStore   |
GET|HEAD   api/v1/search ----------------------------------------------------------------- video-search › Api\SearchController@index   |
POST       api/v1/state/store ------------------------------------------------------------ view-store › Api\AjaxEventController@viewStore   |
DELETE     api/v1/streamer/unfollow ------------------------------------------------------ streamer-unfollow › Api\AjaxEventController@removeFollow   |
GET|HEAD   api/v1/streamer/{user_id}/{username} ------------------------------------------ streamer-follow › Api\AjaxEventController@getFollow   |
POST       api/v1/video/dislike ---------------------------------------------------------- video-unlike › Api\AjaxEventController@destory   |
POST       api/v1/video/like ------------------------------------------------------------- video-like › Api\AjaxEventController@store   |
POST       api/v1/video/remove ----------------------------------------------------------- video-remove › Api\AjaxEventController@removeVideo   |
POST       api/v1/video/save ------------------------------------------------------------- video-save › Api\AjaxEventController@saveVideo   |
GET|HEAD   api/v1/video/{user_id}/{video_id} --------------------------------------------- video-index › Api\AjaxEventController@index   |
GET|HEAD   collection -------------------------------------------------------------------- collection › UploadController@collection   |
POST       comment/store ----------------------------------------------------------------- comment-store › CommentController@store   |
GET|HEAD   comment/{vid} ----------------------------------------------------------------- comment-fetch › CommentController@fetch   |
GET|HEAD   cookie-policy ----------------------------------------------------------------- cookie › PageController@cookie   |
DELETE     delete-streamer/{id} ---------------------------------------------------------- delete_streamer › StreamerController@delete   |
GET|HEAD   dmca -------------------------------------------------------------------------- dmca › PageController@dmca   |
GET|HEAD   dmca/process ------------------------------------------------------------------ dmca-process › DmcaController@index   |
POST       dmca/process ------------------------------------------------------------------ DmcaController@store   |
GET|HEAD   embed/{data} ------------------------------------------------------------------ embed-view › EmbedController@view   |
GET|HEAD   explore ----------------------------------------------------------------------- explore › VideoController@explore   |
GET|HEAD   following --------------------------------------------------------------------- following › HomeController@following   |
GET|HEAD   gender/{value} ---------------------------------------------------------------- gender › PlatformController@gender   |
GET|HEAD   home -------------------------------------------------------------------------- home › HomeController@index   |
GET|HEAD   join/premium ------------------------------------------------------------------ premium › PageController@premium   |
GET|HEAD   likes ------------------------------------------------------------------------- likes › HomeController@likedVideos   |
GET|HEAD   login ------------------------------------------------------------------------- login › Auth\LoginController@showLoginForm   |
POST       login ------------------------------------------------------------------------- Auth\LoginController@login   |
GET|HEAD   login/google ------------------------------------------------------------------ login-google › SocialiteController@google   |
GET|HEAD   login/google/redirect --------------------------------------------------------- login-google-redirect › SocialiteController@googleRedirect   |
GET|HEAD   login/twitter ----------------------------------------------------------------- login-twitter › SocialiteController@twitter   |
GET|HEAD   login/twitter/redirect -------------------------------------------------------- login-twitter-redirect › SocialiteController@twitterRedirect   |
POST       logout ------------------------------------------------------------------------ logout › Auth\LoginController@logout   |
GET|HEAD   notifications ----------------------------------------------------------------- notifications › PageController@notifications   |
GET|HEAD   password/confirm -------------------------------------------------------------- password-confirm › Auth\ConfirmPasswordController@showConfirmForm   |
POST       password/confirm -------------------------------------------------------------- Auth\ConfirmPasswordController@confirm   |
POST       password/email ---------------------------------------------------------------- password-email › Auth\ForgotPasswordController@sendResetLinkEmail   |
GET|HEAD   password/reset ---------------------------------------------------------------- password-request › Auth\ForgotPasswordController@showLinkRequestForm   |
POST       password/reset ---------------------------------------------------------------- password-update › Auth\ResetPasswordController@reset   |
GET|HEAD   password/reset/{token} -------------------------------------------------------- password-reset › Auth\ResetPasswordController@showResetForm   |
GET|HEAD   personalize ------------------------------------------------------------------- personalize › VideoController@personalize   |
GET|HEAD   platform/{value} -------------------------------------------------------------- platforms › PlatformController@index   |
GET|HEAD   press ------------------------------------------------------------------------- press › PageController@press   |
GET|HEAD   privacy ----------------------------------------------------------------------- privacy › PageController@privacy   |
GET|HEAD   profile/{username} ------------------------------------------------------------ profile › VideoController@streamer   |
POST       profile/{username} ------------------------------------------------------------ profile-follow › VideoController@streamerStore   |
GET|HEAD   profile/{username}/most-popular ----------------------------------------------- profile-popular › VideoController@popular   |
POST       profile/{username}/most-popular ----------------------------------------------- profile-follow-mp › VideoController@streamerStore   |
GET|HEAD   profile/{username}/photos ----------------------------------------------------- photos › VideoController@photos   |
GET|HEAD   register ---------------------------------------------------------------------- register › Auth\RegisterController@showRegistrationForm   |
POST       register ---------------------------------------------------------------------- Auth\RegisterController@register   |
GET|HEAD   sanctum/csrf-cookie ----------------------------------------------------------- sanctum-csrf-cookie › Laravel\Sanctum › CsrfCookieController@show   |
POST       store-streamer ---------------------------------------------------------------- store_streamer › StreamerController@store   |
GET|HEAD   watchlater -------------------------------------------------------------------- watchlater › HomeController@watchlater   |
DELETE     watchlater/{video_id} --------------------------------------------------------- watchlater-remove › HomeController@watchlaterRemove   |

[62] routes
