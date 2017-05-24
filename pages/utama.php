<!-- First Blog Post -->
                <?php foreach ($isi_berita as $ib): ?>
                    
                <h2 align="justify">
                    <a href="#"><?php echo $ib['judul'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                <hr>
                
                <hr>
                <p align="justify"><?php echo $ib['isi'] ?></p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                <?php endforeach ?>
              <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

