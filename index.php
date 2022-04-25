<?php
    require ("resources/views/layouts/main.php");

    session_start();
    if(isset($_SESSION['usuario'])){
?>

<div class="container my-4">
    
    <div class="card mb-4">
    <div class="text-center fw-bold">
        <h1>Walker Up</h1>
    </div>
        <div class="row">
            <div class="col mb-3 mx-3 my-3 card">
               <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex doloribus harum vitae, perspiciatis iste pariatur fugiat ad deserunt ut tempora quos, maiores et? Mollitia corporis dolorem dolorum commodi atque cumque, nisi quo fugit tempora, magni necessitatibus distinctio qui ipsa animi minima provident aperiam? Recusandae debitis expedita maxime adipisci. Harum atque aperiam, earum pariatur cum, labore consectetur maxime inventore delectus reprehenderit error amet voluptatem distinctio alias obcaecati eos rem dolore mollitia, praesentium non autem eum voluptatum. Illum ipsa ex, ratione expedita molestiae dolor natus voluptatum sequi, minima nisi ab, voluptatibus dicta dolorum corporis pariatur quam veritatis dolorem! Doloremque, explicabo. Illum sed perspiciatis libero. Cumque quae a deserunt illo voluptate fugit deleniti sint. Sed, reprehenderit. Non dignissimos voluptatibus deserunt explicabo at ipsum commodi nisi?
               </p>
            </div>
           
        </div>
        <div class="row">
            <div class="col mb-3 mx-3 my-3 card">
               <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ex doloribus harum vitae, perspiciatis iste pariatur fugiat ad deserunt ut tempora quos, maiores et? Mollitia corporis dolorem dolorum commodi atque cumque, nisi quo fugit tempora, magni necessitatibus distinctio qui ipsa animi minima provident aperiam? Recusandae debitis expedita maxime adipisci. Harum atque aperiam, earum pariatur cum, labore consectetur maxime inventore delectus reprehenderit error amet voluptatem distinctio alias obcaecati eos rem dolore mollitia, praesentium non autem eum voluptatum. Illum ipsa ex, ratione expedita molestiae dolor natus voluptatum sequi, minima nisi ab, voluptatibus dicta dolorum corporis pariatur quam veritatis dolorem! Doloremque, explicabo. Illum sed perspiciatis libero. Cumque quae a deserunt illo voluptate fugit deleniti sint. Sed, reprehenderit. Non dignissimos voluptatibus deserunt explicabo at ipsum commodi nisi?
               </p>
            </div>
            <div class="col mb-3 mx-3 my-3 card ">
                
                
                <div id="container" class="">
                <script type="text/javascript">
                    const bar = new ProgressBar.Circle(container, {
                      color: '#aaa',
                      // This has to be the same size as the maximum width to
                      // prevent clipping
                      strokeWidth: 4,
                      trailWidth: 1,
                      easing: 'easeInOut',
                      duration: 1400,
                      text: {
                        autoStyleContainer: false
                      },
                      from: { color: '#FFEA82', width: 1 },
                      to: { color: '#ED6A5A', width: 4 },
                      // Set default step function for all animate calls
                      step: function(state, circle) {
                        circle.path.setAttribute('stroke', state.color);
                        circle.path.setAttribute('stroke-width', state.width);
                    
                        var value = Math.round(circle.value() * 100);
                        if (value === 0) {
                          circle.setText('');
                        } else {
                          circle.setText(value);
                        }
                    
                      }
                    });
                    bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
                    bar.text.style.fontSize = '2rem';

                    bar.animate(1.0);  // Number from 0.0 to 1.0
                </script>
                </div>    
            </div>
        </div>
    </div>
</div>

<?php
    }else{
        header('Location: resources/out/login.php');
    }?>
