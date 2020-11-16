<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>
</head>

<body>

<!-- START NAV -->
<nav class="navbar is-white">
    <div class="container">

    </div>
</nav>
<!-- END NAV -->
<div class="container">
    <div class="columns">
        <div class="column is-12">
            <section class="hero is-info welcome is-small">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            {{ config('app.name') }}
                        </h1>
                        <h2 class="subtitle">
                            {{ config('app.description') }}
                        </h2>
                    </div>
                </div>
            </section>
            <section class="info-tiles">
                <div class="tile is-ancestor has-text-centered">
                    @foreach ($data as $label => $value)
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <p class="title">{{ $value }}</p>
                                <p class="subtitle">{{ $label }}</p>
                            </article>
                        </div>
                    @endforeach
                </div>
            </section>
            <div class="column is-12">
                <div class="card events-card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Items
                        </p>
                    </header>
                    <div class="card-table">
                        <div class="content">
                            <table class="table is-fullwidth is-striped">
                                <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td width="5%"><i class="fa fa-bell-o"></i></td>
                                        <td><b>{{ $item->name }}</b></td>
                                        <td>{{ $item->description }}</td>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>
