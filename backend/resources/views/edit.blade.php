@extends('layouts.withoutAuth')

@section('content')

<!-- component -->
<!-- This is an example component -->
<div>

    @if (Auth::check())
    <div class="fixed right-8 top-16">{{-- フローティングボタン --}}
        <button
                class="modal-open p-0 w-16 h-16 bg-blue-600 rounded-full hover:bg-blue-700 active:shadow-lg mouse shadow transition ease-in duration-200 focus:outline-none">
          <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
            <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                    C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                    C15.952,9,16,9.447,16,10z" />
          </svg>
        </button>
    </div> {{-- フローティングボタン --}}
    @endif

      {{-- TOPページ文言 --}}
      <div class="max-w-6xl mx-auto px-5 py-24">
        <div class="flex flex-wrap w-full mb-8 flex-col items-center text-center divide-y divide-yellow-500">
          <h1 class="title-font mb-2 text-4xl font-extrabold leading-10 tracking-tight text-left sm:text-5xl sm:leading-none md:text-6xl"> Tasuku </h1>
          <p class="lg:w-1/2 w-full leading-relaxed text-base p-3 ">独習者支援サービス</p>
          <div class="p-8 ">
                <p>作りたい企画を新規Githubリポジトリで立ち上げ、今からやることをGithubのカンバン(Project)のURLを貼って公開しましょう！</p>
                <p>誰かがあなたに手をさしのべてくれるかもしれません！あなたのそのやりとりが他の人には教材となります。広告を貼って、収益を得ましょう。</p>
                <p>またdraw.ioのURLを貼り企画を共有しましょう。マインドマップから次にやるタスクを他の経験者ユーザーと共に洗い出し、<br>そのタスクについて知見のあるユーザーは質問者の作成したマインドマップへブランチを切り「参考URL」や「〇〇は理解してますか？」などのヒアリングをして進捗を助けましょう。</p>
                <p>解決したタスクのやりとりのマインドノードは広告をつけるか非公開にして販売することができます。</p>
                <h1>（リワードは回答者、質問者に分配されます）</h1>
          </div>

            <div class="flex flex-wrap w-full  flex-col items-center text-center">
                <p class="lg:w-1/2 w-full leading-relaxed text-base mt-16">
                    みんなのプロジェクト一覧
                </p>
            </div>
        </div>
        <div class="divide-y divide-none">
            <div class="flex flex-wrap -m-4 divide-none">
                {{-- foreachでプロジェクトモデルを回す --}}
                {{-- @foreach ($projects as $project)
                <div class="xl:w-1/3 md:w-1/2 p-4 ">
                    <div class="border border-gray-300 p-6 rounded-lg xl:h-96">
                        <div class="xl:h-64 overflow-scroll">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg class=" fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>
                            </div>
                            <h2 class="text-lg  font-medium title-font mb-3"> {{$project->title}} </h2>
                            <p class="leading-relaxed text-base">
                                {{$project->description}}
                                </p>

                            <div class="text-center mt-2 leading-none flex justify-between w-full">
                                <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">

                                </span>
                                <span class=" inline-flex items-center leading-none text-sm">
                                <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                    <path fill="#D8D8D8" d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z"/>
                                    <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z"/></g></svg>
                                    {{ $project->user->name }}
                                </span>
                            </div>
                        </div>
                        <div class=" p-6 flex items-center justify-around rounded-lg xl:h-24">
                            @if ($project->github_url)
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                    <a href="{{ $project->github_url }}" target="_blank">
                                        <img src="https://github.com/favicon.ico">
                                    </a>
                            </div>
                            @endif
                            @if ($project->drawio_url)
                                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                        <a href="{{ $project->drawio_url }}" target="_blank">
                                            <img src="https://draw.io/favicon.ico">
                                        </a>
                                </div>
                            @endif
                            @if ($project->mindmap_url)
                                <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                        <a href="{{ $project->mindmap_url }}" target="_blank">
                                            <img src="https://coggle.it/favicon.ico">
                                        </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach --}}

                {{-- <div class="xl:w-1/3 md:w-1/2 p-4 ">
                    <div class="border border-gray-300 p-6 rounded-lg xl:h-96">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg class=" fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>
                        </div>
                        <h2 class="text-lg  font-medium title-font mb-3"> ポモドーロ＆＆作業マッチングビデオチャット </h2>
                        <p class="leading-relaxed text-base">
                            ポモドーロのサイクルが流れている作業部屋にあなたの好きな職種の人とマッチングします。
                            はじめにどんな作業をするのかお互いに伝えます。
                            ２５分の集中するときはマイクがオフになります。
                            休憩時間のみ、マイクでしゃべることができます。
                            </p>

                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                            40min
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">
                            <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd">
                                <path fill="#D8D8D8" d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z"/>
                                <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z"/></g></svg>
                                Higashi
                            </span>
                        </div>
                    </div>
                </div>

                <div class="xl:w-1/3 md:w-1/2 p-4 ">
                    <div class="border border-gray-300 p-6 rounded-lg xl:h-96">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
    width="48" height="48"
    viewBox="0 0 226 226"
    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><path d="M113,226c-62.40818,0 -113,-50.59182 -113,-113v0c0,-62.40818 50.59182,-113 113,-113v0c62.40818,0 113,50.59182 113,113v0c0,62.40818 -50.59182,113 -113,113z" fill="#cccccc"></path><g><path d="M121.28667,24.48333l-88.51667,88.51667l26.555,26.555l115.07167,-115.07167z" fill="#40c4ff"></path><path d="M174.39667,104.14833l-48.68417,48.68417l-26.555,-26.555l22.12917,-22.12917z" fill="#40c4ff"></path><rect x="-12.81925" y="36.0168" transform="rotate(-45.001) scale(4.42583,4.42583) skewX(0)" width="8.485" height="8.485" fill="#03a9f4"></rect><path d="M174.39667,201.51667h-53.11l-22.12917,-22.12917l26.555,-26.555z" fill="#01579b"></path><path d="M99.1575,179.3875l39.8325,-13.2775l-13.2775,-13.2775z" fill="#084994"></path></g></g></svg>
                        </div>
                        <h2 class="text-lg  font-medium title-font mb-3"> ６週間ライフチェンジングプログラム〜習慣化アプリ〜 </h2>
                        <p class="leading-relaxed text-base">
                            ６週間ライフチェンジングプログラムの成功をサポートするアプリです。
                            フォロワーの進捗度などをみたりして、キツイ６週間を一緒に耐えましょう。
                            ６週間を無事乗り切ったユーザーには習慣化アプリとして使えるようになります。
                            </p>

                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                            40min
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">
                            <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd">
                                <path fill="#D8D8D8" d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z"/>
                                <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z"/></g></svg>
                                Higashi
                            </span>
                        </div>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4 ">
                    <div class="border border-gray-300 p-6 rounded-lg xl:h-96">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            Laravel
                        </div>
                        <h2 class="text-lg  font-medium title-font mb-3"> マインドマップサービス </h2>
                        <p class="leading-relaxed text-base">
                            マインドマップを販売できるサービスを作りたいです。
                            </p>

                        <div class="text-center mt-2 leading-none flex justify-between w-full">
                            <span class=" mr-3 inline-flex items-center leading-none text-sm  py-1 ">
                            40min
                            </span>
                            <span class=" inline-flex items-center leading-none text-sm">
                            <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd">
                                <path fill="#D8D8D8" d="M9.2 6.583v11.08h3.5V6.583zm6.4 11.084h3.5V3h-3.5z"/>
                                <path fill="#667EEA" d="M2.6 17.667h3.5v-7.334H2.6z"/></g></svg>
                                Higashi
                            </span>
                        </div>
                    </div>
                </div> --}}
            </div>



            <!--Modal-->
            <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
                <div class="modal-overlay absolute w-full h-full bg-white opacity-50"></div>

                <div class="modal-container bg-gray-900 w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-gray-300 text-sm z-50">
                    <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                    <span class="text-sm">(Esc)</span>
                </div>

                <!-- Add margin if you want to see some of the overlay behind the modal-->
                @php
                 $user = Auth::user();
                @endphp
                @if (Auth::check())
                    <form method="POST" action="{{ route('editStoreProject', ['project_id' => $project->id]) }}">
                @else
                    <form>
                @endif
                    @csrf
                    <div class="modal-content py-4 text-left px-6">
                        <!--Title-->
                        <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">プロジェクト新規登録</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                        </div>
                        </div>

                        <!--Body-->
                        <p class="text-center">Github Projectを公開しましょう。</p>
                        <p class="text-center">設計図を公開しましょう。</p>
                        <p class="text-center">マインドマップを公開しましょう。</p>

                        <label class="block">
                            <span class="text-white">プロジェクト名</span>
                            <input name="title" class="form-input mt-1 block w-full text-black" placeholder="ProjectTitle" value="{{old('bizzme_url',$project->title)}}">
                        </label>
                        <label class="block">
                            <span class="text-white">プロジェクト概要</span>
                            <textarea name="description" class="form-textarea mt-1 block w-full text-black" rows="3" placeholder="Enter some long form content.">{{old('description',$project->description)}}</textarea>
                          </label>

                        <label class="block">
                            <span class="text-white">Github カンバンURL</span>
                            <input name="github_url" type="url" class="form-input mt-1 block w-full text-black" placeholder="project@github.com" value="{{old('github_url',$project->github_url)}}">
                        </label>
                        <label class="block">
                            <span class="text-white">draw.io 設計図</span>
                            <input name="drawio_url" type="url" class="form-input mt-1 block w-full text-black" placeholder="project@drawio.com" value="{{old('drawio_url',$project->drawio_url)}}">
                        </label>
                        <label class="block">
                            <span class="text-white">coggle.it マインドマップ</span>
                            <input name="mindmap_url" type="url" class="form-input mt-1 block w-full text-black" placeholder="project@coggle.com" value="{{old('mindmap_url',$project->mindmap_url)}}">
                        </label>
                        <label class="block">
                            <div class="flex mt-6">
                                <label class="flex items-center">
                                  <input id="isWorking" name="isWorking" value=true type="checkbox" class="form-checkbox"onchange="chk1(this)"
                                  @php
                                    if($project->isWorking){
                                        echo ('checked');
                                    }
                                  @endphp
                                  >
                                  <span class="ml-2">作業中フラグ</span>
                                  <small class="ml-8">BIZZ MEで作業を公開しましょう。</small>
                                </label>
                            </div>
                        </label>
                        <label class="block" id="bizzme_form" style="display:none;">
                            <span class="text-white">BIZZ ME　作業部屋 <a href="https://bizmee.net/" target="_blank" class="underline" > こちらから部屋を作成できます。</a></span>
                            <input name="bizzme_url" type="url" class="form-input mt-1 block w-full text-black" placeholder="https://bizmee.net/room name" value="{{old('bizzme_url',$project->bizzme_url)}}"></label>
                        <!--Footer-->



                        <div class="flex justify-end pt-2">
                        <button class="px-4 bg-transparent p-3 rounded-lg text-red-500 hover:bg-red-100 hover:text-red-400 mr-2"
                        name = "delete" onclick='return confirm("本当に削除しますか？");'>Delete</button>


                        <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400 mr-2"
                        name = "edit" type="submit" id="editButton">編集完了</button>
                        </div>

                    </div>
                </form>
            </div> {{-- Modal --}}
            @php
              $topURL = route('top');
            @endphp
            <script
            src="https://code.jquery.com/jquery-3.5.1.slim.js"
            integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
            crossorigin="anonymous"></script>
            <script>
                //onChangeでしかよばれないと更新されていない問題の解決

                checkbox = document.getElementById("isWorking");
                chk1(checkbox);
                function chk1(checkbox){
                    console.log(checkbox.checked);
                    bizzme_form = document.getElementById("bizzme_form");
                    if(checkbox.checked){
                        $(bizzme_form).show();
                    } else {
                        $(bizzme_form).hide();
                    }

                    // document.getElementById("span8").textContent = val;

                    // if(val=== "red"){
                    //     document.form8.c8[1].checked = false;
                    // }else{
                    //     document.form8.c8[0].checked = false;
                    // }
                }
                //

                var openmodal = document.querySelectorAll('.modal-open')
                // const body = document.querySelector('body')
                const topURL = '{{$topURL}}';
                toggleModal();

                for (var i = 0; i < openmodal.length; i++) {
                openmodal[i].addEventListener('click', function(event){
                    event.preventDefault()
                    window.location.href = topURL;
                })
                }

                const overlay = document.querySelector('.modal-overlay')
                overlay.addEventListener('click', jumpTop)

                var closemodal = document.querySelectorAll('.modal-close')
                for (var i = 0; i < closemodal.length; i++) {
                closemodal[i].addEventListener('click', jumpTop)
                }

                document.onkeydown = function(evt) {
                evt = evt || window.event
                var isEscape = false
                if ("key" in evt) {
                    isEscape = (evt.key === "Escape" || evt.key === "Esc")
                } else {
                    isEscape = (evt.keyCode === 27)
                }
                if (isEscape && document.body.classList.contains('modal-active')) {
                    window.location.href = topURL;
                }
                };

                function jumpTop(){
                    window.location.href = topURL;
                }


                function toggleModal () {
                const body = document.querySelector('body')
                const modal = document.querySelector('.modal')
                modal.classList.toggle('opacity-0')
                modal.classList.toggle('pointer-events-none')
                body.classList.toggle('modal-active')
                }

                function setOnEnterClickButton(targetButtonId,formName){
                var form = (formName == null) ? document.forms[0] : document.forms[formName];
                var targetButton = document.getElementById(targetButtonId);
                document.onkeypress=function(e){
                    e = e ? e : event;
                    var keyCode= e.charCode ? e.charCode : ((e.which) ? e.which : e.keyCode);
                    var elem = e.target ? e.target : e.srcElement;
                    if(Number(keyCode) == 13) {//13=EnterKey
                    if(!isIgnoreEnterKeySubmitElement(elem)){
                        targetButton.click();
                    }
                    return isInputElement(elem) ? false : true;
                    }
                }
                }
                function isIgnoreEnterKeySubmitElement(elem){
                var tag = elem.tagName;
                if(tag.toLowerCase() == "textarea"){
                    return true;
                }
                switch(elem.type){
                    case "button":
                    case "submit":
                    case "reset":
                    case "image":
                    case "file":
                    return true;
                }
                return false;
                }
                function isInputElement(elem){
                switch(elem.type){
                    case "text":
                    case "radio":
                    case "checkbox":
                    case "password":
                    return true;
                }
                return false;
                }
                setOnEnterClickButton('editButton');

                $(function(){
                $("input").on("keydown",function(ev){
                    if ((ev.which && ev.which === 13) ||(ev.keyCode && ev.keyCode === 13)){
                    return false;
                    } else {
                    return true;
                    }
                });
                });

                $(function(){
                $("select").focus(function(){
                $(this).on("keydown",function(ev){
                    if ((ev.which && ev.which === 13) ||(ev.keyCode && ev.keyCode === 13)){
                    return false;
                    } else {
                    return true;
                    }
                });
                });
                });
            </script>
      </div>
</div>
@endsection