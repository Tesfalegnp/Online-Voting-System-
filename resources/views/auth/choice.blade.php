@extends('app')

@section('title', 'Choose Your Option')

@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
    <style>
        .choice-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .choice-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }
        .choice-option {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 20px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }
        .choice-option:hover {
            background: rgba(255, 255, 255, 0.4);
        }
        input[type="radio"] {
            transform: scale(1.3);
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 8px;
            border: none;
            background: #ff6f61;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #ff4f4f;
        }
    </style>

    <div class="choice-container">
        <h1 class="mb-4">Make Your Choice</h1>
        <p>Choose an option to continue your journey with us.</p>
        <form id="choiceForm">
            <div class="choice-buttons">
                <label class="choice-option">
                    <input type="radio" name="choice" value="Prosperity"> Prosperity
                </label>
                <label class="choice-option">
                    <input type="radio" name="choice" value="Ezema"> Ezema
                </label>
                <label class="choice-option">
                    <input type="radio" name="choice" value="TPLP"> TPLP
                </label>
            </div>
            <button type="button" onclick="submitChoice()">Choice</button>
        </form>
    </div>

    <script>
        function submitChoice() {
            const selectedOption = document.querySelector('input[name="choice"]:checked');
            if (!selectedOption) {
                Swal.fire({
                    title: 'No Selection',
                    text: 'Please select an option before proceeding.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
                return;
            }
            const choice = selectedOption.value;
            fetch('/save-choice', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ choice })
            })
            .then(response => response.json())
            .then(data => {
                Swal.fire({
                    title: 'You selected ' + choice,
                    text: 'Your choice has been saved!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '/register?choice=' + choice;
                });
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error',
                    text: 'Something went wrong. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        }
    </script>
    
@endsection
