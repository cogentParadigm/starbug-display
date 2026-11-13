<?php
namespace Starbug\Display;

use function DI\autowire;
use function DI\get;

return [
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
  "template.helpers" => [
    "breadcrumbs" => BreadcrumbsHelper::class,
    "displays" => DisplaysHelper::class
  ]
];
