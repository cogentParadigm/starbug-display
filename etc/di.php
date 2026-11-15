<?php
namespace Starbug\Display;

use function DI\add;
use function DI\autowire;
use function DI\get;
use Starbug\Display\Helper\BreadcrumbsHelper;
use Starbug\Display\Helper\DisplaysHelper;
use Starbug\Display\Helper\FilterHelper;
use Starbug\Display\Hook\FormCheckboxHook;
use Starbug\Display\Hook\FormFileHook;
use Starbug\Display\Hook\FormHiddenHook;
use Starbug\Display\Hook\FormHookFactory;
use Starbug\Display\Hook\FormHookFactoryInterface;
use Starbug\Display\Hook\FormHtmlHook;
use Starbug\Display\Hook\FormInputHook;
use Starbug\Display\Hook\FormMultipleCategorySelectHook;
use Starbug\Display\Hook\FormMultipleSelectHook;
use Starbug\Display\Hook\FormPasswordHook;
use Starbug\Display\Hook\FormRadioHook;
use Starbug\Display\Hook\FormRadioSelectHook;
use Starbug\Display\Hook\FormSelectHook;
use Starbug\Display\Hook\FormSubmitHook;
use Starbug\Display\Hook\FormTagSelectHook;
use Starbug\Display\Hook\FormTemplateHook;
use Starbug\Display\Hook\FormTextHook;
use Starbug\Display\Hook\FormTextareaHook;

return [
  'Starbug\Display\*Interface' => autowire('Starbug\Display\*'),
  "form.hooks" => [
    "checkbox" => FormCheckboxHook::class,
    "file" => FormFileHook::class,
    "hidden" => FormHiddenHook::class,
    "html" => FormHtmlHook::class,
    "input" => FormInputHook::class,
    "multiple_category_select" => FormMultipleCategorySelectHook::class,
    "multiple_select" => FormMultipleSelectHook::class,
    "password" => FormPasswordHook::class,
    "radio" => FormRadioHook::class,
    "radio_select" => FormRadioSelectHook::class,
    "select" => FormSelectHook::class,
    "submit" => FormSubmitHook::class,
    "tag_select" => FormTagSelectHook::class,
    "template" => FormTemplateHook::class,
    "textarea" => FormTextareaHook::class,
    "text" => FormTextHook::class
  ],
  FormHookFactoryInterface::class => autowire(FormHookFactory::class)
    ->constructorParameter("hooks", get("form.hooks")),
  "template.helpers" => add([
    "breadcrumbs" => BreadcrumbsHelper::class,
    "displays" => DisplaysHelper::class,
    "filter" => FilterHelper::class
  ])
];
