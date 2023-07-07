<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exam Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-blue-100">
        <!--Nav Bar-->
        <div class="h-14 bg-white shadow flex items-center justify-between">
            <div class="font-semibold text-2xl pl-4">Exam</div>
            <a id="finish_exam" href="{{ route('finish_exam') }}">
                <div class="group relative z-0 mr-3">
                    <div
                        class="w-0 h-full bg-wbc-100 rounded-md absolute inset-0 ease-in-out duration-500 transition-all group-hover:w-full -z-10">
                    </div>
                    <button
                        class="shadow-md rounded-md py-2 px-4 mr-3 w-full font-semibold border border-wbc-100 transition-colors duration-300 ease-in-out group-hover:text-white z-10">
                        Submit
                    </button>
                </div>
            </a>
        </div>
        <div class="md:flex">
            <div class="hidden md:block bg-blue-100 w-20"></div>
            <div class="grow">
                <!--No and Timer-->
                <div class="bg-blue-100 h-12 flex flex-row items-center justify-between">
                    <div class="bg-wbc-100 text-white rounded shadow-inner p-1 ml-2">
                        <span id="index">{{ session('index') + 1 }}</span> /
                        <span id="length">{{ session('number_of_questions') }}</span>
                    </div>
                    <div id="timer" class="bg-wbc-100 text-white py-1 px-2 rounded-md mr-2">
                        0:00:00
                    </div>
                </div>
                <div class="bg-blue-100 mb-2">
                    <div class="bg-white rounded-lg p-2 shadow-md mx-2 mb-2">
                        <p class="break-normal">

                            {{ $question->name }}
                        </p>
                    </div>
                    <div class="bg-white rounded-lg p-2 shadow-md m-2">
                        <div class="inline bg-wbc-100 px-1 text-white shadow">A</div>
                        <p class="inline break-normal">
                            {{ $question->optionA }}
                        </p>
                    </div>
                    <div class="bg-white rounded-lg p-2 shadow-md m-2">
                        <div class="inline bg-wbc-100 px-1 text-white shadow">B</div>
                        <p class="inline break-normal">{{ $question->optionB }}</p>
                    </div>
                    <div class="bg-white rounded-lg p-2 shadow-md m-2">
                        <div class="inline bg-wbc-100 px-1 text-white shadow">C</div>
                        <p class="inline break-normal">{{ $question->optionC }}</p>
                    </div>
                    <div class="bg-white rounded-lg p-2 shadow-md mx-2 mt-2">
                        <div class="inline bg-wbc-100 px-1 text-white shadow">D</div>
                        <p class="inline break-normal">
                            {{ $question->optionA }}
                        </p>
                    </div>
                </div>
                <div>
                    <form action="{{ route('answer_store') }}" method="POST" id="answer">
                        @csrf
                        <input type="hidden" name="input_timer" id="input_timer" value="">
                        <ul class="grid grid-cols-4 bg-blue-100 items-center mx-5 md:mx-80">
                            <li class="mx-auto my-2">
                                <input type="radio" id="A" name="Options" value="A"
                                    class="sr-only peer" />
                                <label for="A"
                                    class="bg-white shawdow py-1 px-3 shadow rounded-lg border-r-4 border-b-4 border-wbc-100 peer-checked:bg-wbc-100 peer-checked:text-white peer-checked:border-0 peer-checked:shadow-inner">A</label>
                            </li>
                            <li class="mx-auto my-2">
                                <input type="radio" id="B" name="Options" value="B"
                                    class="sr-only peer" />
                                <label for="B"
                                    class="bg-white shawdow py-1 px-3 shadow rounded-lg border-r-4 border-b-4 border-wbc-100 peer-checked:bg-wbc-100 peer-checked:text-white peer-checked:border-0 peer-checked:shadow-inner">B</label>
                            </li>
                            <li class="mx-auto my-2">
                                <input type="radio" id="C" name="Options" value="C"
                                    class="sr-only peer" />
                                <label for="C"
                                    class="bg-white shawdow py-1 px-3 shadow rounded-lg border-r-4 border-b-4 border-wbc-100 peer-checked:bg-wbc-100 peer-checked:text-white peer-checked:border-0 peer-checked:shadow-inner">C</label>
                            </li>
                            <li class="mx-auto my-2">
                                <input type="radio" id="D" name="Options" value="D"
                                    class="sr-only peer" />
                                <label for="D"
                                    class="bg-white shawdow py-1 px-3 shadow rounded-lg border-r-4 border-b-4 border-wbc-100 peer-checked:bg-wbc-100 peer-checked:text-white peer-checked:border-0 peer-checked:shadow-inner">D</label>
                            </li>
                        </ul>
                    </form>
                </div>

                {{-- {{ $questions->links('vendor.pagination.custom') }} --}}
                <div class="flex justify-around my-3 bg-blue-100 mx-7 md:mx-0 md:my-10">
                    {{-- <button id="back"
                        class="bg-white shadow-md rounded-lg py-2 px-3 border-2 flex transition ease-in delay-100 hover:bg-wbc-100 hover:text-white hover:shadow-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                        </svg>
                        <div class="pl-2">Back</div>
                    </button> --}}
                    <button id="next"
                        class="bg-white shadow-md rounded-lg py-2 px-3 border-2 flex transition ease-in delay-100 hover:bg-wbc-100 hover:text-white hover:shadow-inner">
                        <div class="pr-2">Next</div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="hidden md:block w-24"></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        function updateTimerDisplay(remainingTime) {
            var hours = Math.floor(remainingTime / 3600);
            var minutes = Math.floor((remainingTime % 3600) / 60);
            var seconds = remainingTime % 60;

            var timerText = hours + ":" + minutes + ":" + seconds;
            $('#timer').text(timerText);
            $("#input_timer").val(timerText);
        }

        $(document).ready(function() {

            if ($("#index").text() < $("#length").text()) {
                $("#next").click(function() {
                    $("#answer").submit()
                })
            } else {
                $("#next").prop('disabled', true)
                $("#next").
            }

            function updateTimer() {
                $.ajax({
                    url: "{{ route('timer.index') }}",
                    dataType: 'json',
                    success: function(response) {
                        var remainingTime = response.remainingTime;
                        if (remainingTime <= 0) {
                            $('#timer').text("Timer Expired");
                            window.location.href = $("#finish_exam").attr('href');
                        } else {
                            updateTimerDisplay(remainingTime);
                        }
                    }
                });
            }
            setInterval(updateTimer, 1000);
        });
    </script>

</body>

</html>
