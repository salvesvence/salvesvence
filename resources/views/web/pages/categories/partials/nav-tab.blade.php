<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#es" aria-controls="es" role="tab" data-toggle="tab">Español</a>
    </li>
    <li role="presentation">
        <a href="#en" aria-controls="en" role="tab" data-toggle="tab">Inglés</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="es">
        <div class="row">
            <div class="col-sm-12">
                <hr>
            </div>
            @include('web.pages.categories.partials.form', [
                'locale' => 'es',
                'action' => $action,
                'method' => $method,
                'name' => isset($category) && $category->hasTranslation('es') ? $category->translate('es')->name : ''
            ])
        </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="en">
        <div class="row">
            <div class="col-sm-12">
                <hr>
            </div>
            @include('web.pages.categories.partials.form', [
                'locale' => 'en',
                'action' => $action,
                'method' => $method,
                'name' => isset($category) && $category->hasTranslation('en') ? $category->translate('en')->name : ''
            ])
        </div>
    </div>
</div>