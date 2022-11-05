<nav class="navbar navbar-expand-lg navbar-dark mx-auto">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#z0gAdminbar" aria-controls="z0gAdminbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> 

    <div class="collapse navbar-collapse" id="z0gAdminbar">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item text-center dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="z0gAminbarLangDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Language<span class="sr-only">(current)</span>
                </a>
                <div class="dropdown-menu text-center" aria-labelledby="z0gAminbarLangDropdownMenuLink">
                    <?= $this->Html->link(__x('listLanguage','Vietnamese'), '?lang=vi_VN', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','German'), '?lang=de_DE', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','English'), '?lang=en_US', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','Spanish'), '?lang=es_ES', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','French'), '?lang=fr_FR', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','Nederlands'), '?lang=nl_NL', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','Polish'), '?lang=pl_PL', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','Português'), '?lang=pt_BR', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','Русский'), '?lang=ru_RU', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','Bokmål'), '?lang=nb_NO', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','Ελληνικά'), '?lang=el_GR', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','日本語'), '?lang=ja_JP', ['class'=>'dropdown-item'])?>
                    <?= $this->Html->link(__x('listLanguage','繁體中文'), '?lang=zh_CN', ['class'=>'dropdown-item'])?>
                </div>
            </li>
            <li class="nav-item text-center"><a href="/logout" class="nav-link"><?= __('Logout') ?></a></li>

        </ul>
    </div>
</nav>
