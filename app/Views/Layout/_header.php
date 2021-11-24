<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Categories assignment</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php base_url(uri_string()) == base_url('/') ? print('active') : '';?>">
                <a class="nav-link" href="<?php echo base_url('/'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php base_url(uri_string()) == base_url('categories') ? print('active') : '';?>">
            <a class="nav-link" href="<?php echo base_url('categories'); ?>">Category Tree</a>
            </li>
        </ul>
    </div>
</nav>