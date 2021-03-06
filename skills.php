<section id="skills" class="skillsSection">
    <h2 class="skillsMainTitle">Compétences</h2>

    <div class="skillContainerGlobal">
        <?php

        $skills = [
            ['title' => 'Combat',
                'titleClass' => 'skillsTitle',
                'iconClass' => 'skillIconSwords',
                'text' => 'Expertise dans le maniement d\'objets redondants',
                'textClass' => 'skillsText',
            ],
            ['title' => 'Stratégie',
                'titleClass' => 'skillsTitle',
                'iconClass' => 'skillIconCastle',
                'text' => 'Comptage des briques au centième près de manière péremptoire',
                'textClass' => 'skillsText',
            ],
            ['title' => 'Communication',
                'titleClass' => 'skillsTitle',
                'iconClass' => 'skillIconOld',
                'text' => 'Spécialisé dans la gestion des vieux mystérieux',
                'textClass' => 'skillsText',
            ],
        ];

        foreach ($skills as $skill) {
        ?>
        <div class="skillContainer">
            <div class="<?=$skill['iconClass'];?>"></div>
            <h3 class="<?=$skill['titleClass'];?>"><?=$skill['title'];?></h3>
            <p class="<?=$skill['textClass'];?>"><?=$skill['text'];?></p>
        </div>
        <?php
}
        ?>

    </div>
</section>

