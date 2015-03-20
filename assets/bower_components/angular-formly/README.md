[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/formly-js/angular-formly?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Build Status](https://travis-ci.org/formly-js/angular-formly.svg)](https://travis-ci.org/formly-js/angular-formly)
[![Coverage Status](https://img.shields.io/coveralls/formly-js/angular-formly.svg)](https://coveralls.io/r/formly-js/angular-formly)

## Formly

Formly for Angular is an AngularJS module which has directives to help customize and render JSON based forms. The directive originated from a need to allow our users to create surveys and distribute them easily. Currently we've can render the form data from JSON and assign a model to form so we can receive the submitted data.

```html
<formly-form model="formData" fields="formFields"></formly-form>
```

### NOTICE: UPGRADING FROM 2.0 to 3.0?

There were some [significant changes](https://github.com/formly-js/angular-formly/blob/master/CHANGELOG.md) that you'll want to be aware of. In order to upgrade and get all the cool features, you're going to need to change your field configurations. [Here is a tool](http://jsbin.com/ruwoke) that should help make that process easier. Also, if you are not able to update the configuration very easily, see [this issue](https://github.com/formly-js/angular-formly/issues/162) for ideas on how to ease things a little.

### Demo : http://formly-js.github.io/angular-formly/

## Dependencies
- Required to use Formly:
 - Angular

- Dev dependencies to build Formly
 - npm


## Install in your project
1. Install with Bower or npm
 `$ bower install angular-formly --save`
 or
 `$ npm install angular-formly --save`

2. Include the javascript file in your index.html, Formly without any form templates. You can create your own or use some of our prebuilt templates which cover basic form types, then extend with your own as needed.

 `<script src="bower_components/angular-formly/dist/formly.min.js"></script>`
 and
 `angular.module('yourModule', ['formly']);`

 or
 `angular.module('yourModule', [require('angular-formly')]);`


### Prebuilt Templates

While it is recommended to create your own templates for ultimate customization and flexibility, there are prebuilt templates you can use:

 - [Vanilla Template](https://github.com/formly-js/angular-formly-templates-vanilla#install-in-your-project): no fancy styling, just plain html
 - [Bootstrap Templates](https://github.com/formly-js/angular-formly-templates-bootstrap#install-in-your-project): bootstrap compatible forms, form-groups, etc.
 - [LumX Templates](https://github.com/formly-js/angular-formly-templates-lumx): LumX compatible components

### DIY Templates
Regardless of which flavor you use (or if you use no flavor at all), you can create your own templates with `formlyConfigProvider`.
This is the recommended approach if you want to customize your templates at all.


## Documentation

*Note:* This `README.md` is for the latest version of `formly`. There have been some changes in the latest version which is not stable. For documentation on the latest stable version, see the [1.0.0 documentation](https://github.com/formly-js/angular-formly/tree/1.0.0)

### Example

Here's an example using the vanilla template properties

You can add a formly-form in your HTML templates as shown below.
```html
<formly-form model="formData" fields="formFields">
	<button ng-click="onSubmit()">Hello World</button>
</formly-form>
```

Example data as it would be set in the controller
```javascript
$scope.formData = {};
$scope.formFields = [
	{
		//the key to be used in the model values {... "username": "johndoe" ... }
		key: 'username',

		type: 'text',
		label: 'Username',
		placeholder: 'johndoe',
		required: true,
		disabled: false, //default: false
		description: 'Descriptive text'
	},
	{
		key: 'password',
		type: 'password',
		label: 'Password',
		required: true,
		disabled: false, //default: false
		expressionProperties: {
			hide: '!model.username' // hide when username is blank
		}
	}

];

$scope.onSubmit = function() {
	console.log('form submitted:', $scope.formData);
};
```

### Creating Form Fields
When constructing fields use the options below to customize each field object. You must set at least a `type`, `template`, or `templateUrl`.

##### type (string)
>`type` is the type of field to be rendered. Either type, template, or templateUrl must be set.

###### Default
>`null`

###### Values
> depends on the template set you're using. See documentation for the specific fieldset you are using.

---
##### template (string)
>`template` can be set instead of `type` or `templateUrl` to use a custom html template form field. Should be used with one-liners mostly (like a directive). Useful for adding functionality to fields.

**Note:** This can be used to add HTML instead of a form field.

Examples:
```html
template: '<p>Some text here</p>'
```

```html
template: '<hr />'
```

###### Default
>`undefined`

---
##### templateUrl (string)
>`templateUrl` can be set instead of `type` or `template` to use a custom html template form field. Set a path relative to the root of the application. ie `directives/custom-field.html`

###### Default
>`undefined`

---
##### key (string)
>By default form models are keyed by location in the form array, you can override this by specifying a `key`.

###### Default
>`undefined`

---
##### hide (boolean)
>Whether to hide the field (uses `ng-if`)

###### Default
>`undefined`

---
##### model (object)
>By default, the `model` passed to the `formly-field` directive is the same as the `model` passed to the `formly-form`. However, if the field has a `model` specified, then the specified `model` is used for that field (and that field only). Also, a deep watch is added to the `formly-field` directive's scope to run the `expressionProperties` when the specified `model` changes.

###### Default
>`undefined`

---
##### expressionProperties (object)
>`expressionProperties` is an object where the key is a property to be set on the main field config (can be an angular expression) and the value is an expression used to assign that property. The expression can be a function or string expression and will be evaluated using `formlyEval` from `formlyUtils` see below for more information. The returned value is wrapped in `$q.when` so you can return a promise from your function :-)

For example:

```javascript
vm.fields = [
  {
    key: 'myThing',
    type: 'someType',
    expressionProperties: {
      'templateOptions.label': '$viewValue', // this would make the label change to what the user has typed
      'data.someproperty.somethingdeeper.whateveryouwant': 'model.myThing.length > 5' // this would set that property on data to be whether or not the model's myThing value has a length greater than 5
    }
  }
];
```

###### Default
>`undefined`

---
##### data (*)
>`data` is reserved for the developer. You have our guarantee to be able to use this and not worry about future versions of formly overriding your usage and preventing you from upgrading :-)

###### Default
>`undefined`

---
##### templateOptions (*)
>`templateOptions` is reserved for the templates. Any template-specific options go in here. Look at your specific template implementation to know the options required for this.

###### Default
>`undefined`

---
##### wrapper (string|array of strings)
>`wrapper` makes reference to `setWrapper` in the formlyConfigProvider. It is expected to be the name of the wrapper specified there. The formly field will be wrapped by the first wrapper, then the second, then the third, etc.

###### Default
>`undefined`

---
##### ngModelAttrs (object)
>`ngModelAttrs` is used in an angular-formly created templateManipulator to automatically add attributes to the ng-model element of field templates. There are two properties: `bound` and `unbound`. In both cases, the key is the attribute to add to the `ng-model` element. In the `unbound` case, the value will be evaluated on the field's scope, and assigned to the attribute (not bound). In the `bound` case, the property will be assigned as the value (for example: the value `'ng-pattern': /abc/` would result in: `ng-pattern="options.ngModelAttrs['ng-pattern']"` which, ultimately, would result in `ng-pattern="/abc/"` where `/abc/` is bound to the value of `options.ngModelAttrs['ng-pattern']` and therefore, can be changed via `expressionProperties`.

###### Default
>`undefined`

---
##### controller (controller function)
>`controller` is a great way to add custom behavior to a specific field. You can also set the controller to a type as well. It is injectable with the $scope of the field, and anything else you have in your injector.

###### Default
>`undefined`

---
##### link (link function)
>`link` allows you to specify a link function. It is invoked after your template has finished compiling. You are passed the normal arguments for a normal link function.

###### Default
>`undefined`

---
##### optionsTypes (string|array of strings)
>`optionsTypes` allows you to specify extra types to get options from. Duplicate options are overridden in later priority (index `1` will override index `0` properties). Also, these are applied *after* the `type`'s `defaultOptions` and hence will override any duplicates of those properties as well.

###### Default
>`undefined`

---
##### modelOptions (object)
>`modelOptions` allows you to take advantage of `ng-model-options` directive. Formly's built-in templateManipulator (see below) will add this attribute to your `ng-model` element automatically if this property exists. Note, if you use the `getter/setter` option, formly's templateManipulator will change the value of `ng-model` to `options.value` which is a getterSetter that formly adds to field options. For more information on ng-model-options, see [these](https://egghead.io/lessons/angularjs-new-in-angular-1-3-ng-model-options-getters-and-setters) [egghead](https://egghead.io/lessons/angularjs-new-in-angular-1-3-ng-model-options-updateon-and-debounce) [lessons](https://egghead.io/lessons/angularjs-new-in-angular-1-3-ngmodeloptions-allows-you-to-set-a-timezone-on-your-model).

##### Default
>`{ getterSetter: true, allowInvalid: true }`

---
##### watcher (object|array of watches)
>`watcher` is an object which has at least two properties called `expression` and `listener`. The `watch.expression` is added to the `formly-form` directive's scope. If it's a function, it will be wrapped and called with the field as the first argument, followed by the normal arguments for a watcher, followed the watcher's `stop` function. If it's not defined, it will default to the value of the field. The `listener` will also be wrapped and called with the field as the first argument, followed by the normal arguments for a watch listener. You can also specify a type (`$watchCollection` or `$watchGroup`) via the `type` property (defaults to `$watch`) and whether you want it to be a deep watch via the `deep` property (defaults to `false`).

How the api differs from a normal `$watch`:

```javascript
// normal watcher
$scope.$watch(function expression(theScope) {}, function listener(newValue, oldValue, theScope) {});

// field watcher
$scope.$watch(function expression(field, theScope, stop) {}, function listener(field, newValue, oldValue, theScope, stop) {});
```

###### Default
>`undefined`

---
##### validators (object)
>`validators` is an object where the keys are the name of the validity (to be passed to `$setValidity`) and the values
are functions or expressions which returns true if it is valid. Templates can pass this option to the
`formly-custom-validation` directive which will add a parser (or validator, see note) to the `ngModel` controller of
the field. The validator can be a function or string expression and will be evaluated using `formlyEval` from
`formlyUtils` see below for more information.

>**Note:** Formly will utilize the `$validators` pipeline (introduced in angular 1.3) if available, otherwise it will
fallback to `$parsers`. If you are using angular 1.3, formly will automatically use the `$asyncValidators` pipeline if
your validator is a function (and wrap it in `$q.when` so you don't need to worry about returning a promise if that
doesn't make sense for your validator). Note, in this case, all the normal $asyncValidators rules apply. To fail the
validation, reject the promise. Also, note the performance implications when you mix sync and non-sync validators:
https://github.com/angular/angular.js/issues/10955 (not a problem if your validators are not actually costing resources,
or if you make the sync validators strings instead of functions).

> **NOTE 2**: You can alternatively specify a validator as an object with an `expression` and a `message`. This will
unify how templates reference messages for when the validator has failed. Also, this should be used only for one-off
messages (use `ng-messages-include` for generic messages). `message` in this case should be an expression that is
evaluated in exactly the same way a validator is evaluated. The `formly-custom-validation` directive will then add an
object to the field options called `validationMessages` which is a map of functions where the key is the validation name
and the value is a to function which returns the evaluated message.

###### Default
>`undefined`

## Other Notes

### CSS Classes

The resulting form element has the class `formly` and each field has the class `formly-field`.

### Validation

Formly uses angular's built-in validation mechanisms. See the [angular docs](https://docs.angularjs.org/guide/forms) for more information on this. (Note, if you're using Angular 1.3, formly utilizies the new `$validators` and `$asyncValidators` pipelines, otherwise, it falls back to good old `$parsers`. Either way, your API is the same, though you can't do asynchornous validation with 1.2.x).

The form controller is bound to what you specify as the `form` attribute on the `formly-form` directive. Make sure to specify a name on any `ng-model` in your custom templates to ensure that the `formControl` is added to the `options`. If you're using Angular 1.3, the `name` attribute is interpolateable (you can use `{{id}}`). If you are stuck on 1.2.x, you can use the `formly-dynamic-name` directive where the value is an expression which would return the name (so, `formly-dynamic-name="id"`). Formly will add a `formControl` property to the field, and you can reference that in your template with `options.formControl` to get access to properties like `$invalid` or `$error`. See the bootstrap templates for an example.

You can also specify custom validation in your JSON. See the field called `validators` for more information on this. If you wish to leverage this in a custom template, use the `formly-custom-validation` directive and pass `options.validators` to it.

### directives

#### formly-form

This the the main directive you'll use throughout your code. A word of advice, create your own directive that wraps this
one. This will make any upgrades easier if the api changes at all. If you want an example of how to do this, file an
issue and I'll demonstrate :-D

The attributes allowed on the directive are as follows:

##### model

The model to be represented by the form.

##### fields

The field configurations for building the form

##### form

The variable to bind the `NgFormController` to.

##### no-ng-form

You will not likely use this often. It requires no value, but its presence will change the `formly-form` directive from
being replace with an `ng-form` to being a `div`. If you choose this option, make sure to wrap it in your own `ng-form`
or `form` and provide that with a `name`. Then pass that `name` to the `form` attribute so all the `formControls` of the
fields will have somewhere to be added to.

#### formly-field

You will not likely need to use this directive, but if you do just know that unless you're using it inside `formly-form`
you're fields are not going to get all the treatment (like `watchers` for example).

##### options

The field config. Must have a `type` OR `template` OR `templateUrl`. Everything else is optional, but it is limited to
the options mentioned above. Any extra options will result in an error.

##### model

The model for the field to represent

##### formId

The id of the form, used to generate the id for the field which is used in the `name` (for the `formControl`) and the id
of the field (useful for a `label`'s `for` attribute)

##### index

The index of the field, used if `key` is not defined on the field.

##### fields

The other fields. As convenience if needed.

##### form

The `NgFormController` that will be used to get and set the `formControl` for the field.

#### formly-custom-validation

This is an attribute directive. The given value should be a `validators` object.

#### formly-focus

This is an attribute directive. It will watch the given value and focus the element when the given value is truthy. You
can also optionally add a `refocus` attribute and this will cause focus to be returned to the previous element with
focus when the `formly-focus` value is set to falsey (unless the user has clicked away from the focused element).

### Global Config

#### formlyConfigProvider

You can configure formly to use custom templates for specified types (your own "text" template) by injecting the `formlyConfigProvider` in your app's `config` function. The `formlyConfigProvider` has the following functions:

##### setType

Allows you to specify a custom type

```javascript
// object api (single type with a template)
formlyConfig.setType({
  name: 'input',
  template: '<input ng-model="[options.key]" />'
});
// with a templateUrl
formlyConfig.setType({
  name: 'checkbox',
  templateUrl: 'custom-formly-fields-checkbox.html'
});

// array api (multiple types)hi
formlyConfig.setType([
  {
    name: 'radio',
    templateUrl: 'custom-formly-fields-radio.html'
  },
  {
    name: 'button',
    templateUrl: '<button ng-click="options.templateOptions">{{options.label</button>'
  }
]);

// also, you can specify wrappers for a type
formlyConfig.setType({
  name: 'select',
  templateUrl: 'custom-formly-fields-select.html',
  wrapper: ['inner', 'outer', 'evenOuterOuter']
});

// you can also set default options for fields of this type. This can be done with or without a template or templateUrl
// useful when combined with the field's `optionsTypes` property.
formlyConfig.setType({
  name: 'phone',
  defaultOptions: {
    ngModelAttrs: {
      bound: {
        'ng-pattern': /^1[2-9]\d{2}[2-9]\d{6}$/
      }
    }
  }
});

// you also have the option to specify a controller and a link function
formlyConfig.setType({
  name: 'uploadButton',
  controller: function($scope, $upload) {
    $scope.onUploadClicked = function(file) {
      return $upload.start(file); // whatever...
    }
  },
  link: function(scope, el) {
    el.addClass('manipulate-the-dom');
  }
});
```

##### setWrapper, getWrapper, getWrapperByType, removeWrapperByName, & removeWrappersForType

Allows you to set a template for your formly templates. You can have a default (used by all templates), named template wrappers, and typed template wrappers (used by fields with the specified type). All template wrappers must follow these rules
 - Use `<formly-transclude></formly-transclude>` in them to specify where the field template should be placed.
 - Have at least one, and only one of `templateUrl` or `template`
 - Not override another by name or type

For example:

```javascript
// simple argument api
formlyConfigProvider.setWrapper('<div>This is the default because <formly-transclude></formly-transclude> there is no name specified</div>');
formlyConfigProvider.setWrapper('<div>This is not the default because <formly-transclude></formly-transclude> there is a name specified</div>', 'theName');

// object api
formlyConfigProvider.setWrapper({
  name: 'inputWrapper', // optional. Defaults to name || types.join(' ') || 'default'
  template: 'the template with <formly-transclude></formly-transclude> in it', // must have this OR templateUrl
  templateUrl: 'path/to/template.html', // the resulting template MUST have <formly-transclude></formly-transclude> in it and must have templateUrl OR template (not both)
  types: 'stringOrArray' // this can be a string or an array of strings that map to types specified by setTemplate and setTemplateUrl
});

// array api
formlyConfigProvider.setWrapper([
  { /* same configuration as the object api */ },
  { /* same configuration as the object api */ },
  { /* same configuration as the object api */ },
  { /* same configuration as the object api */ }
]);
```

`removeWrapperByName` and `removeWrappersForType` are helpful if you're using a template library but want to customize your own wrappers. The api is simple:

```javascript
formlyConfigProvider.removeWrapperByName('inputWrapper'); // removes the wrapper that's called 'inputWrapper'
formlyConfigProvider.removeWrappersForType('select'); // removes all wrappers that apply to the type of 'select'
```

Also, note, that if you want to remove the default wrapper, this is done by passing `'default'` to the `removeWrapperByName` function.

Another note, you can instead override wrappers (and types as well) without a warning if you specify an `overwriteOk: true` property.

See [the website](https://formly-js.github.io/angular-formly/) for examples on usage

##### templateManipulators

This allows you to manipulate the template of a specific field. This gives you a great deal of power without sacrificing performance by having bindings which you will never need as well as save repetition in your templates. The api to this feature is as follows:

```javascript
// note, most of the formlyConfigProvider functions can
// actually be done in the `run` function as well using `formlyConfig`.
formlyConfigProvider.templateManipulators.preWrapper.push(function(template, options, scope) {
  // determine if you wish to do anything with this template,
  // manipulated as needed, and return either the old template,
  // the new template, or a promise that will resolve with the
  // new template... for example
  if (options.data.addWarningMessage) {
    return template + '<div>This is a warning message!!!</div>';
  } else {
    return template;
  }
});

// or, if you wanted to load a template, you would do it in the
// run function so you can get $http, and $templateCache, then do:
formlyConfig.templateManipulators.preWrapper.push(function(template, options, scope) {
  return $http.get('the/template.html', {cache: $templateCache}).then(function(response) {
    return response.data.replace('where-the-template-goes', template);
  });
});
```

Note! There is a *built-in* `templateManipulator` that automatically adds attributes to the `ng-model` element(s) of your templates for you. Here are the things you need to know about it:

- It will never override existing attributes
- To prevent it from running on your field, simply set `data: {noTouchy: true}` and this template manipulator will skip yours
- It wont do anything to the template if it can't find any elements with the attribute `ng-model`.
- It first goes through the `bound` and `unbound` `ngModelAttrs` specified for the field (read more about that above)
- It adds a `name` and `id` attribute (the `scope.id` for both of them)
- It adds the `formly-custom-validation` directive if the field has `options.validators`
- It adds `ng-model-options` directive if the field has `options.modelOptions`
- It adds a bunch of `ng-` attributes (like `ng-maxlength`, `ng-required`, etc) if the corresponding value is present on `templateOptions` or referenced in `expressionProperties`. You can specify additional bound attributes with the `data.ngModelBoundAttributes` property
- It adds a bunch of `ng-` attributes expressions (like `ng-click`, `ng-blur`, `ng-keypress`, etc) if the corresponding value is present on `templateOptions` (prefixed with `on`). If it is a function, it will be invoked like so: `options.templateOptions.onClick(value, options, scope, $event)`. Otherwise, it will be evaluated using `$scope.$eval` (so it can be a normal expression you would put in the attribute yourself). You can specify additional invoked attributes with the `data.ngModelInvokedAttributes` property.
- It adds a bunch of normal attributes if the corresponding value is present on `templateOptions` or referenced in `expressionProperties`. These will added like so: `{{options.templateOptions.placeholder}}` so they will be bound. You can specify additional expression attributes with the `data.ngModelAttributes` property

This is incredibly powerful because it makes the templates require much less bloat AND it allows you to avoid paying the cost of watchers that you'd never use (like a field that will never be required for example).

##### disableWarnings

Formly gives some useful warnings when you attempt to use a template that doesn't exist or there's a problem loading a template. You can disable these warnings via `formlyConfigProvider.disableWarnings = true`

## Tips and Tricks

Please see [the Wiki](https://github.com/formly-js/angular-formly/wiki) for tips and tricks from the community.

### Expressions

There are four places where you can put expressions. The context in which these expressions are evaluated is important. There are two different types of context and each is explained below:

1) watcher - expression and listener can be functions or expression strings. This is a regular angular `$watch` (depending on the specified `type`) function and it is created on the `formly-form` scope, despite being applied to a specific field. This allows the expressions to run even if the field's scope has been destroyed (via an ng-if like when the field is hidden). The function signature differs from a normal `$watch` however. See above for more details.

2) expressionProperties & validators - these expressions can be functions or expression strings. If it's a function,
it's invoked with the arguments `$viewValue`, `$modelValue`, and `scope`. The scope in this case, is the field's scope.
If it's an expression string, it is evaluated using `$scope.$eval` with a locals object that has `$viewValue` and
`$modelValue` (however, in the case of `expressionProperties`, `$viewValue` will simply be the `$modelValue` because
they don't have a hook into the `ngModelController` but we want to keep the api consistent).

## Custom Templates

You have a lot of freedom when it comes to writing templates. You don't even need to use the `model` which means that you can have fields that are just part of the look and feel of your form. Formly also provides you with the following directives to help you in your templates:

 - formly-custom-validation
 - formly-dynamic-name (useful if you want to support pre 1.3, otherwise, just use `name="{{::id}}"`)
 - formly-focus

## Roadmap

- See the [issues labeled enhancement](labels/enhancement)

## Contributing

Please see the [CONTRIBUTING Guidelines](CONTRIBUTING.md).

## Thanks

A special thanks to [Nimbly](http://gonimbly.com) for creating/sponsoring Angular-Formly's development.
Thanks to [Kent C. Dodds](https://github.com/kentcdodds) for his continued support on the project.
