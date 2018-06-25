<?php
namespace Survey;

use Illuminate\Support\ServiceProvider;
class SurveyServiceProvider extends ServiceProvider{
    
    public function  boot(){
        
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/./../resources/views', 'survey');
    }
    public function register() {
        
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

