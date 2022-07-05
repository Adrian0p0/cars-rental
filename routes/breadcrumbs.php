<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


Breadcrumbs::for('contact', function ($trail) {
   $trail->push('Contact', url('contact'));
});

