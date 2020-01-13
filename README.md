# Carbon Field Radio Color
This plugin is a color picker inspired of wordpress gutenberg native color picker and extended from native Carbon Field Radio Field.

This plugin can be used as Wordpress Plugin or as wordpress mu-plugin, including with bedrock.

To know advanced usage see : [Official Radio Field Documentation](https://docs.carbonfields.net/#/fields/radio)

## Basic usage
```
Field::make( 'radio_color', 'color', __( 'Choose a color' ) )
        ->set_options( [
          'red'   => "#ff0000",
          'green' => "#00ff00",
          'blue'  => "#0000ff"
        ] );
```

## Install (with composer for Bedrock)
`composer require agence-ho5/carbon-fields-radio-color`
