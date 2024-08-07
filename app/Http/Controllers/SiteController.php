<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Doctrine\DBAL\Schema\View;
use Filament\Forms\Components\View as ComponentsView;
use Filament\Tables\Columns\Layout\View as LayoutView;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SiteController extends Controller
{
    public function about()
    {
        $widget = TextWidget::query()
        ->where('key','=', 'about-page')
        ->where('active','=', true)->first();
        if(!$widget){
            throw new NotFoundHttpException();

        }
        return view('about',compact('widget'));
    }
}
