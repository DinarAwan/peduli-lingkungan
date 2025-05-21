
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (Session::get('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
@endif
{{-- 
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=task_alt" />
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: 'Poppons', sans-serif;
        background: white;
        height: 100vh ;
        user-select: none;
    }
    .center, .content{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    
    }
    
    .content{
        /* visibility: hidden; */
        width: 400px;
        height: 300px;
        padding: 40px 25px;
        text-align: center;
        background: rgb(255, 255, 255);
        border-radius: 30px;
        box-shadow: 0 2px 12px 0 rgba(0, 0, .2 );
    }
    #click:checked~.content{
        visibility: visible;
    }
    .click-hire{
        display: block;
        width: 160px;
        height: 50px;
        background: rgb(55, 55, 139);
        color: azure;
        text-align: center;
        font-size: 18px;
        line-height: 50px;
        border-radius: 15px;
        cursor: pointer;
        transition: .2s;
    }
    
    .click-hire:hover{
        background: rgb(27, 27, 136);
    
    }
    #click{
        display: none;
    
    }
    .check{
        font-size: 100px;
        margin-top: 10px;
        color: blueviolet;
        text-align: center;
    }
    
    .text{
        color: black;
        font: 18px;
        margin-top: 20px;
    }
    h2, p{
        margin: 0px;
        padding: 0px;
    
    }
    .close-btn{
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translate(-50px, -50px);
        border: 2px solid rgba(58, 73, 158, 0.333) ;
        border-radius: 15px;
        color: rgb(32, 105, 207);
        padding: 8px 30px;
        font-size: 18px;
        cursor: pointer;
    }
    .close-btn:hover{
        background: rgb(34, 101, 119);
        color: white;
    }
</style>

    <div class="center">
        
        <div class="content">
            <span class="material-symbols-outlined check">task_alt</span>
            <div class="text">
                <h2>error</h2>
                @foreach ($errors->all() as $item)
                {{ $item }}
            @endforeach
            </div>
            <label for="click" class="close-btn">close</label>
        </div>
    </div> --}}
