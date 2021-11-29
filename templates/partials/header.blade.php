<!DOCTYPE html>
<html {{ language_attributes() }}>
<head>
    <meta charset="{{ get_bloginfo( 'charset' ) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @php(wp_head())
</head>
<body class="m-0" @php(body_class())>
@php(wp_body_open())
