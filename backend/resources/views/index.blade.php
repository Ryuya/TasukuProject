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
                <p>またdraw.ioのURLを貼り企画を共有しましょう。このサービスのマインドマップから次にやるタスクを他の経験者ユーザーと共に洗い出し、<br>そのタスクについて知見のあるユーザーは「参考URL」や「〇〇は理解してますか？」などのヒアリングをして進捗を助けましょう。</p>
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
                <div class="xl:w-1/3 md:w-1/2 p-4 ">{{-- カード１ --}}
                    <div class="border border-gray-300 p-6 rounded-lg xl:h-96">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg class=" fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>
                        </div>
                        <h2 class="text-lg  font-medium title-font mb-3"> 独習者支援サービス（Tasuku） </h2>
                        <p class="leading-relaxed text-base">
                            このサイト自身のプロジェクトです。
                            ご意見などありましたら、<a href="#">こちら</a>にメールください。

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
                </div>{{-- カード１ --}}

                <div class="xl:w-1/3 md:w-1/2 p-4 ">
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
                </div>
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
                    <p>Modal content can go here</p>

                    <select class="px-4 py-3 rounded-full">
                        <option value="Ruby on Rails"> Ruby on Rails</option>
                        <option value="Unity"> Unity </option>
                        <option value="Unity"> Flutter </option>
                    </select>


                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                    <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
                    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
                    </div>

                </div>
            </div> {{-- Modal --}}
            <script>
                var openmodal = document.querySelectorAll('.modal-open')
                for (var i = 0; i < openmodal.length; i++) {
                openmodal[i].addEventListener('click', function(event){
                    event.preventDefault()
                    toggleModal()
                })
                }

                const overlay = document.querySelector('.modal-overlay')
                overlay.addEventListener('click', toggleModal)

                var closemodal = document.querySelectorAll('.modal-close')
                for (var i = 0; i < closemodal.length; i++) {
                closemodal[i].addEventListener('click', toggleModal)
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
                    toggleModal()
                }
                };


                function toggleModal () {
                const body = document.querySelector('body')
                const modal = document.querySelector('.modal')
                modal.classList.toggle('opacity-0')
                modal.classList.toggle('pointer-events-none')
                body.classList.toggle('modal-active')
                }


            </script>
      </div>
</div>
@endsection