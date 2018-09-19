<?php

function age($date)
{
    $dna = strtotime($date);
    $now = time();

    $age = date('Y',$now)-date('Y',$dna);
    if(strcmp(date('md', $dna),date('md', $now))>0) $age--;

    return $age;
}

function displayGuestBook()
{
    $csvFile = file('../src/app/messages.csv');
    $file = [];
    foreach ($csvFile as $road) {
        $file[] = str_getcsv($road,"~",'"');
    }
    foreach ($file as $line) {
        foreach ($line as $col)
            ?>
            <div class="row mt-4">
                <div class="col-lg-3 customer">
                    <img class="card-img-top mt-2" src = "<?php echo $line[7] ?>" alt = "avatar" >
                    <div class="card-body" >
                        <h3 class="card-title" > <?php echo ucfirst($line[0]) . " " . strtoupper($line[1]) ?></h3 >
                        <p class="card-text" > <?php echo age($line[2]) . " ans" ?></p><hr>
                        <p class="card-text" > <?php echo ucfirst($line[3]) . " (" . strtoupper($line[4]) . ")" ?></p>
                    </div >
                </div >
                <div class="col-lg-9 comment-body" >
                    <div class="row" >
                        <div class="col-12 title mt-2" >
                            <?php echo $line[5]?><hr>
                        </div >
                        <div class="col-12 message" style = "height:15rem" >
                            <?php echo $line[6]?>
                        </div >
                        <div class="col-12 date" >
                            <hr><p>Created :<?php echo $line[8]?></p>
                        </div >
                    </div >
                </div >
            </div>

        <?php
    }

}
