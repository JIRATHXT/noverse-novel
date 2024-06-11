<div class="container-fluid mt-2">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <!-- php ในส่วนนี้จะตรวจสอบ ?type= หลังลิงค์ว่า กำหนดประเภทไหนไว้เพื่อขึ้นข้อความกำกับ -->
                    <?php
                    if (!isset($_GET['type'])):
                        ?>
                        <h1 class="card-title"><i class="fa-solid fa-book"></i>&nbsp;นิยาย</h1>
                        <?php
                    else:
                        switch ($_GET['type']):
                            case 'fantasy':
                                ?>
                                <h1 class="card-title"><i class="fa-solid fa-dragon"></i>&nbsp;แฟนตาซี</h1>
                                <?php
                                break;

                            case 'romantic':
                                ?>
                                <h1 class="card-title"><i class="fa-solid fa-heart"></i>&nbsp;โลแมนติก</h1>
                                <?php
                                break;
                            case 'timetravel':
                                ?>
                                <h1 class="card-title"><i class="fa-solid fa-clock"></i>&nbsp;ข้ามเวลา</h1>
                                <?php
                                break;
                            case 'fanfic':
                                ?>
                                <h1 class="card-title"><i class="fa-solid fa-pen-fancy"></i>&nbsp;แฟนฟิค</h1>
                                <?php
                                break;
                            case 'cartoon':
                                ?>
                                <h1 class="card-title"><i class="fa-solid fa-feather"></i>&nbsp;การ์ตูน</h1>
                                <?php
                                break;

                        endswitch;
                    endif;
                    ?>

                    <p class="card-subtitle">
                        นิยายคือเรื่องเล่าหรือเรื่องแต่งที่สร้างขึ้นเพื่อความบันเทิงหรือให้ข้อคิด
                        โดยมีการบรรยายเหตุการณ์ ตัวละคร และฉากต่าง ๆ ที่เกิดขึ้นตามจินตนาการของผู้เขียน
                        นอกจากนี้ นิยายยังสามารถแบ่งออกเป็นหลายประเภท เช่น นิยายรัก นิยายสืบสวน
                        นิยายวิทยาศาสตร์ เป็นต้น</p>
                    <div class="row">
                        <div class="col-md-2 mt-5">
                            <div class="card card-novel">
                                <img src="https://i.pinimg.com/736x/3d/a4/46/3da446cb11c3d2fbf8a3525c02392046.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ชื่อเรื่อง</h5>
                                    <p class="card-text">การอธิบายหรือให้รายละเอียดเกี่ยวกับเรื่องราว
                                        สิ่งของ หรือแนวคิดต่างๆ
                                        เพื่อให้ผู้อ่านหรือผู้ฟังเข้าใจได้ชัดเจนยิ่งขึ้น</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-5">
                            <div class="card card-novel">
                                <img src="https://i.pinimg.com/736x/3d/a4/46/3da446cb11c3d2fbf8a3525c02392046.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ชื่อเรื่อง</h5>
                                    <p class="card-text">การอธิบายหรือให้รายละเอียดเกี่ยวกับเรื่องราว
                                        สิ่งของ หรือแนวคิดต่างๆ
                                        เพื่อให้ผู้อ่านหรือผู้ฟังเข้าใจได้ชัดเจนยิ่งขึ้น</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-5">
                            <div class="card card-novel">
                                <img src="https://i.pinimg.com/736x/3d/a4/46/3da446cb11c3d2fbf8a3525c02392046.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ชื่อเรื่อง</h5>
                                    <p class="card-text">การอธิบายหรือให้รายละเอียดเกี่ยวกับเรื่องราว
                                        สิ่งของ หรือแนวคิดต่างๆ
                                        เพื่อให้ผู้อ่านหรือผู้ฟังเข้าใจได้ชัดเจนยิ่งขึ้น</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-5">
                            <div class="card card-novel">
                                <img src="https://i.pinimg.com/736x/3d/a4/46/3da446cb11c3d2fbf8a3525c02392046.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ชื่อเรื่อง</h5>
                                    <p class="card-text">การอธิบายหรือให้รายละเอียดเกี่ยวกับเรื่องราว
                                        สิ่งของ หรือแนวคิดต่างๆ
                                        เพื่อให้ผู้อ่านหรือผู้ฟังเข้าใจได้ชัดเจนยิ่งขึ้น</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-5">
                            <div class="card card-novel">
                                <img src="https://i.pinimg.com/736x/3d/a4/46/3da446cb11c3d2fbf8a3525c02392046.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ชื่อเรื่อง</h5>
                                    <p class="card-text">การอธิบายหรือให้รายละเอียดเกี่ยวกับเรื่องราว
                                        สิ่งของ หรือแนวคิดต่างๆ
                                        เพื่อให้ผู้อ่านหรือผู้ฟังเข้าใจได้ชัดเจนยิ่งขึ้น</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-5">
                            <div class="card card-novel">
                                <img src="https://i.pinimg.com/736x/3d/a4/46/3da446cb11c3d2fbf8a3525c02392046.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">ชื่อเรื่อง</h5>
                                    <p class="card-text">การอธิบายหรือให้รายละเอียดเกี่ยวกับเรื่องราว
                                        สิ่งของ หรือแนวคิดต่างๆ
                                        เพื่อให้ผู้อ่านหรือผู้ฟังเข้าใจได้ชัดเจนยิ่งขึ้น</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>