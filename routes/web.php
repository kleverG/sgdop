<?php

use App\Http\Controllers\CoordinadorController;
use Illuminate\Support\Facades\Route;

Route::view  ('/'              , 'Inicio'     )->name('inicio'     );
Route::view  ('/bandera'       , 'bandera'    )->name('bandera'    );
Route::view  ('/comentario'    , 'comentario' )->name('comentario' );


Route::get   ('/coordinador'                    , [CoordinadorController::class,'index' ])->name('coordinadores.index' );
Route::get   ('/coordinador/create'             , [CoordinadorController::class,'create'])->name('coordinadores.create');
Route::post  ('/coordinador'                    , [CoordinadorController::class,'store' ])->name('coordinadores.store' );
Route::get   ('/coordinador/{coordinador}'      , [CoordinadorController::class,'show'  ])->name('coordinadores.show'  );
Route::get   ('/coordinador/{coordinador}/edit' , [CoordinadorController::class,'edit'  ])->name('coordinadores.edit'  );
Route::patch ('/coordinador/{coordinador}'      , [CoordinadorController::class,'update'])->name('coordinadores.update');
