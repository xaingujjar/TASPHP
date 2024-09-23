<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Stepper</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .stepper {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .step {
            width: 33%;
            text-align: center;
            padding: 10px;
            border-radius: 50%;
            background-color: #ddd;
            color: #000;
        }
        .step.active {
            background-color: #0d6efd;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="stepper">
        <div class="step active">Step 1</div>
        <div class="step">Step 2</div>
        <div class="step">Step 3</div>
    </div>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="step1">
            <h3>Step 1 Content</h3>
            <p>This is the content for step 1.</p>
            <button class="btn btn-primary next">Next</button>
        </div>
        <div class="tab-pane fade" id="step2">
            <h3>Step 2 Content</h3>
            <p>This is the content for step 2.</p>
            <button class="btn btn-primary prev">Previous</button>
            <button class="btn btn-primary next">Next</button>
        </div>
        <div class="tab-pane fade" id="step3">
            <h3>Step 3 Content</h3>
            <p>This is the content for step 3.</p>
            <button class="btn btn-primary prev">Previous</button>
            <button class="btn btn-success">Finish</button>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.querySelectorAll('.next').forEach(button => {
        button.addEventListener('click', function () {
            let activeTab = document.querySelector('.tab-pane.show.active');
            let nextTab = activeTab.nextElementSibling;
            if (nextTab) {
                activeTab.classList.remove('show', 'active');
                nextTab.classList.add('show', 'active');

                updateStepIndicator();
            }
        });
    });

    document.querySelectorAll('.prev').forEach(button => {
        button.addEventListener('click', function () {
            let activeTab = document.querySelector('.tab-pane.show.active');
            let prevTab = activeTab.previousElementSibling;
            if (prevTab) {
                activeTab.classList.remove('show', 'active');
                prevTab.classList.add('show', 'active');

                updateStepIndicator();
            }
        });
    });

    function updateStepIndicator() {
        let steps = document.querySelectorAll('.step');
        let activeIndex = [...document.querySelectorAll('.tab-pane')].findIndex(tab => tab.classList.contains('show'));

        steps.forEach((step, index) => {
            if (index === activeIndex) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });
    }
</script>
</body>
</html>
