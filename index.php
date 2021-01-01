
<html lang="en">

<head>
    <title>Thực Hành 4</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <h1>Lo<span>Go</span></h1>
        </div>
        <div class="login">
            <a href="login.php">Log In</a>
            <a data-toggle="modal" data-target="#loginModal" href="">Sign up</a>
        </div>
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-title text-center">
                        <h3 class="signh3">Sign Up</h3>
                    </div>
                    <div class="d-flex flex-column text-center">
                        <form action="xulydangky.php" method="POST">
                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">First name</label>
                                <div class="col-md-6">
                                    <input type="text" id="full_name" class="form-control" name="firstname" required value>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">Last name</label>
                                <div class="col-md-6">
                                    <input type="text"  id="full_name" class="form-control" name="lastname" required value>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="user_name" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="email"  id="user_name" class="form-control" name="email" required value>
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">Address 1</label>
                                <div class="col-md-6">
                                    <input type="text"  id="full_name" class="form-control" name="address1" required value>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">Address 2</label>
                                <div class="col-md-6">
                                    <input type="text"  id="full_name" class="form-control" name="address2">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">City</label>
                                <div class="col-md-6">
                                    <input type="text"  id="email_address" class="form-control" name="city"required value>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_name" class="col-md-4 col-form-label text-md-right">State Country</label>
                                <div class="col-md-6">
                                    <input type="text"  id="user_name" class="form-control" name="statecountry" required value>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Registration_date</label>
                                <div class="col-md-6">
                                    <input type="datetime-local"  id="email_address" class="form-control" name="Registration_date" required value>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone</label>
                                <div class="col-md-6">
                                    <input type="telephone"  id="phone_number" name="phone" class="form-control" required value>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="present_address" class="col-md-4 col-form-label text-md-right">Zcode-Pcode</label>
                                <div class="col-md-6">
                                    <input type="number"  id="present_address" class="form-control" name="zcodepcode"required value>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password"  id="permanent_address" class="form-control" name="password"required value>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password"  id="permanent_address" class="form-control" name="confirmpassword" required value>
                                </div>
                            </div>
                            <button type="submit" name="signup" class="btn btn-info btn-block btn-round">Đăng Ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-1-12">
                <h1 style="text-align:center">Vui Lòng Đăng Nhập Để Xem Thông Tin Chi Tiết</h1>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam accusantium alias numquam nobis quibusdam, vero corrupti quae inventore consequuntur nostrum autem, libero labore porro. Necessitatibus temporibus commodi repudiandae eius, impedit optio animi, cum iusto doloremque dolor ipsum. In, voluptate dolores tempora modi ratione, corrupti cupiditate quae repudiandae sunt consectetur quaerat? Optio architecto magni eaque? Qui maxime est, doloremque itaque consectetur inventore voluptas perferendis voluptatibus suscipit! Iusto ab quibusdam, aut in obcaecati maxime expedita quia eum possimus? Praesentium voluptatibus fugit numquam consectetur dicta deleniti iure fuga facere laboriosam, adipisci error sequi cum, alias corporis. Doloribus fuga officiis maxime magni aperiam amet autem aliquam praesentium provident. Dolorum natus dolor illo optio quisquam ducimus, repellat in ipsam nemo necessitatibus ex id, architecto incidunt laborum commodi similique laudantium temporibus, consequuntur ea dolorem at dolore! Reiciendis ea in repellendus ducimus autem voluptatibus voluptate totam reprehenderit consequatur accusamus quia aliquam temporibus eligendi iure nesciunt minima debitis eum, illum deleniti amet hic, aliquid quasi laudantium laboriosam? Earum quos dolores libero perspiciatis obcaecati? Earum asperiores, fugiat inventore adipisci cumque ducimus doloribus enim soluta expedita cupiditate sed modi qui, esse neque consectetur ut sunt vero voluptatibus odit, itaque error quis rem! Error reiciendis quas ducimus esse id! Corrupti dolorum suscipit consectetur veritatis. Dolores, ab quia. Atque facere dignissimos maxime delectus. Quos similique est odio quas temporibus iure excepturi explicabo, possimus suscipit blanditiis recusandae ab? Doloribus sint adipisci, dolore repellendus ex, doloremque quia voluptas deserunt cum qui quis suscipit laborum provident rem maxime facere, velit hic sed quos iusto? Libero, tenetur debitis! Similique blanditiis officiis excepturi, quod asperiores illo nostrum sunt eius omnis sapiente inventore, suscipit dolorum amet doloribus officia deleniti vitae numquam, quam quaerat vero labore fugiat repellat. Sequi autem dolores, assumenda repellat, provident officia doloremque minus velit, accusantium expedita esse nisi. Excepturi maiores cupiditate temporibus est corrupti numquam explicabo quos doloremque amet hic. Ipsa ipsam a magnam? Architecto velit neque labore laborum quaerat dolorum recusandae quidem. Laudantium sunt consequuntur aliquam temporibus reprehenderit blanditiis dolore autem necessitatibus minima nam perspiciatis vel vitae voluptatibus eaque sit voluptate, architecto labore quibusdam velit excepturi iure esse fugit in! Officia illum nostrum corporis eligendi quo et totam accusantium fugiat soluta doloribus, incidunt unde tempora deleniti mollitia vitae delectus eum aut. Voluptatibus qui ex quo, id nam deserunt impedit veritatis tenetur molestiae eius exercitationem necessitatibus mollitia facere totam praesentium quisquam magnam sed perspiciatis ipsa doloribus amet, laboriosam eos! Necessitatibus, voluptatum autem provident ea laudantium incidunt, odit, nemo rem facilis id deserunt odio illum fugiat ex. Quidem consequatur praesentium eveniet culpa dolorum. Voluptatem atque quaerat, exercitationem doloremque ducimus consequatur suscipit voluptatum similique excepturi aperiam ex! Debitis, sit. Velit, repudiandae provident voluptas natus rem delectus ut qui eos eum, magnam libero ad fugit quod doloribus cupiditate accusantium earum cum cumque ullam commodi sunt odio possimus pariatur. Reiciendis ad blanditiis sunt! Dolor soluta maxime cum est dicta esse mollitia cupiditate maiores, earum fugiat consectetur, aliquam nam possimus a corporis magni impedit, quibusdam cumque deleniti? Repellat perspiciatis illo, nihil sapiente fugiat, sint porro totam aliquid temporibus voluptatibus pariatur ut, dignissimos rerum nobis obcaecati quia! Voluptate, deserunt maxime architecto similique et iste ad tenetur vero fugiat ea dolore fuga repellat ut dolor, corporis consectetur ducimus ipsum voluptatibus? Assumenda officiis magnam ex fugit! Accusamus labore vero ea reprehenderit unde distinctio eius animi inventore quod excepturi. Modi, nesciunt tenetur rerum quis soluta sunt. Iure sint doloremque blanditiis perspiciatis voluptatibus natus tempore porro aperiam neque at, accusantium ipsam unde nam dolorum, in nostrum. Quia repudiandae id tempore quo placeat iure adipisci sit, pariatur ipsa ducimus obcaecati dolorem deleniti perspiciatis, doloribus magnam eos quibusdam odio ea reiciendis commodi. Sint consequatur repellendus molestiae vero nisi tempora ab, quaerat corporis corrupti amet accusantium sit enim voluptatum nesciunt, commodi labore sunt perferendis vel ut ratione. Cumque mollitia repellat sapiente hic saepe eos, quisquam vel ex nostrum quam, neque illum incidunt pariatur totam exercitationem. Totam labore sapiente obcaecati, animi distinctio commodi, nostrum, accusamus dolore cupiditate velit cum ad incidunt tempore suscipit a provident quisquam quaerat quibusdam corporis. Exercitationem labore ipsum soluta eveniet deleniti a neque eum molestias earum excepturi qui rerum corrupti nihil nisi ut consequuntur mollitia quod ullam tenetur illum quasi, quos autem dicta? Rem nemo a magni reprehenderit ad alias eos accusamus eaque animi harum eveniet excepturi, accusantium maiores facere maxime suscipit illo vero! Dolorem nostrum ipsum debitis sequi excepturi labore impedit harum illo pariatur voluptate inventore doloremque sit ratione quisquam alias et, quaerat libero praesentium! Quidem possimus nostrum quod optio. At qui soluta eaque porro eius ex consectetur consequatur ad quo aut exercitationem, fugiat cupiditate architecto enim dolores, pariatur ab saepe alias laboriosam ipsa dolorem. A nulla sequi, omnis quae, harum molestiae hic in tempore suscipit magnam totam esse sint eaque nobis vel quaerat. Vero natus voluptatem eveniet magni aut quo, fugit perferendis ipsam similique soluta beatae, repellat corporis deleniti aperiam. Eos vitae blanditiis possimus, est assumenda nesciunt animi numquam odio magnam corrupti fugiat? Accusamus impedit fugit deleniti, saepe unde aperiam veniam, repellendus eveniet cumque, mollitia dolore asperiores sapiente nisi possimus. Dolorum ipsam nemo quas, ea inventore amet non saepe labore quos nostrum esse illo sed eaque dignissimos voluptates doloremque, voluptatem iste rem, omnis cum officia. Ut dolorem libero praesentium. Unde doloribus tempora laudantium reiciendis, omnis voluptate ut nisi nobis culpa iure ab libero deleniti? Placeat minima fugit at culpa, sequi sit illo. Error veritatis atque qui praesentium, iusto nobis hic? Sit obcaecati praesentium ipsum cum sequi nostrum labore enim, ad mollitia veritatis, nobis temporibus ab laboriosam magni dignissimos accusantium quod possimus quae tenetur. Delectus blanditiis dolorum totam sit sapiente. Iusto magnam minus rem optio inventore corrupti, voluptatem laudantium similique nulla laborum? Debitis, quos fuga magni recusandae necessitatibus tempora ipsam! Corporis tempore, unde accusantium iure earum voluptatem fugit quisquam reprehenderit in quam eius fuga voluptatum, aliquid quas id! Reiciendis distinctio quasi, deleniti possimus sint enim saepe. Molestiae quasi tempora aspernatur sit pariatur, temporibus odit animi quis error ipsa, officia rerum ullam ducimus. Neque minima quia eum laudantium quam, nobis vitae ex at sint! Culpa praesentium nihil quam quasi sed commodi quaerat alias. Sapiente, animi.</p>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
        // $(document).ready(function() {
        //     $('#loginModal').modal('show');
        //     $(function() {
        //         $('[data-toggle="tooltip"]').tooltip()
        //     })
        // });
    </script>
</body>

</html>