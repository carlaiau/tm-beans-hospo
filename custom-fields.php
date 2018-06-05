<?php

/*
 *
 * Declaration of fields
 *
 * Header section.
 * Image, Paragraph, Header start, and array of ends
 *
 * Repeater sections
 * Image, Paragraph, Direction (Flex reverse yes/no)
 *
 * Footer
 * Header
 * 3 Column rich Text
 */
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', function() {
    Container::make( 'post_meta', 'Header')
        ->where('post_template', '=', 'page-home.php')
        ->add_fields( array(
            Field::make('image', 'header_image', 'Image'),
            Field::make('text', 'header_start', 'Header Start'),
            Field::make('complex', 'header_end', 'Header End')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'string', 'String')
                ))
                ->help_text("The array of strings that are changable"),
            Field::make('rich_text', 'header_paragraph', 'Paragraph Text')
        ));

    Container::make( 'post_meta', 'Body')
        ->where('post_template', '=', 'page-home.php')
        ->add_fields( array(
            Field::make('complex', 'section', 'Section')
            ->set_layout('tabbed-vertical')
            ->add_fields(array(
                Field::make('text', 'id', 'ID')
                    ->help_text("Set an ID, if you to anchor navigate to this section"),
                Field::make('image', 'image', 'Image'),
                Field::make('rich_text', 'paragraph', 'Paragraph'),
                Field::make('checkbox', 'reverse', 'Reverse?')
                    ->set_option_value( '1' )
            ))
        ));

    Container::make( 'post_meta', 'Footer')
        ->where('post_template', '=', 'page-home.php')
        ->add_fields( array(
            Field::make('complex', 'footer_column', 'Column')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('rich_text', 'paragraph', 'Paragraph')
            ))
        ));
});
