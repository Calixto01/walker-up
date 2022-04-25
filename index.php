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
            <?php // progres bar--------------------------------------?>
           
            <div class="col mb-3 mx-3 my-3 card align-content-center">
                
                <div class="progress" id="progress">
                    
                <script class="align-content-center" type="text/javascript">
                    
                    const Heart = () => {
                        var circle = new ProgressBar.Circle('#progress', {
                            color: '#ED6A5A',
                            duration: 5000,
                            easing: 'easeInOut'
                        });
                    
                        circle.animate(1);
                    };
                
                </script>
               </div>
               <button class="btn btn-primary " onclick="Heart()">Heart </button>
                 
            </div>
        </div>
    </div>
</div>

<?php
    }else{
        header('Location: resources/out/login.php');
    }?>
