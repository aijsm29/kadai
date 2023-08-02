3.http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定

<?php
Route::controller(AAAController::class)->group(function() {
    Route::get('XXX', 'bbb');
});
?>

4.admin/profile/create にアクセスしたら ProfileController の add Action に、
  admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定

<?php
Route::controller(ProfileController::class)->prefix('admin')->group(function() {
    Route::get('profile/create', 'add');
    Route::get('profile/edit', 'edit');
});
?>

