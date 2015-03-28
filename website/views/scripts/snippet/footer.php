<footer>
    <div class="row">
        <div class="col-md-3">
            <p><?=$this->input("headline")?></p>
            <p>
                <?=$this->textarea("anycontent")?>
            </p>
        </div>
        <div class="col-md-7">
            <div class="col-md-4 hidden-xs">
                <?=$this->action("sidenav", "navigation", null, array("folder" => "/" . $this->language . "/footer/column1", "class" => "list-unstyled", "renderScript" => "footer")) ?>
            </div>
            <div class="col-md-4 hidden-xs">
                <?=$this->action("sidenav", "navigation", null, array("folder" => "/" . $this->language . "/footer/column2", "class" => "list-unstyled", "renderScript" => "footer")) ?>
            </div>
            <div class="col-md-4 hidden-xs">
                <?=$this->action("sidenav", "navigation", null, array("folder" => "/" . $this->language . "/footer/column3", "class" => "list-unstyled", "renderScript" => "footer")) ?>
            </div>
        </div>
        <div class="col-md-2 contact-info">
            <p>
                <strong>ISOCELL GmbH</strong>
            </p>
            <p>
                Bahnhofstraße 36<br/>
                A-5202 Neumarkt am Wallersee<br/>
                Tel.: +430000000<br/>
                Fax: +43000000<br/>
                E-Mail: <a href="mailto:office@isocell.at">office@isocell.at</a>
            </p>
            <p>
                <strong>Öffnungszeiten</strong>
            </p>
            <p>
                Montag bis Donnerstag<br/>
                7:30 bis 17:00 Uhr
            </p>
            <p>
                Freitag<br/>
                7:30 bis 12:00 Uhr
            </p>
        </div>
    </div>
</footer>
