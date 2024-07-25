<!DOCTYPE html>
@if(session()->get('lang')== 'ar')
<html dir="rtl">
@endif
@if(session()->get('lang') !== 'ar')
<html dir="ltr">
  @endif
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Game</title>
    <link rel="stylesheet" href="main.css">
    <style>
        * {
            box-sizing: border-box;
        }

        .control-buttons {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            background-color: rgba(3, 169, 244, 0.9);
        }
        .control-buttons span {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #F44336;
            color: #FFF;
            padding: 15px 25px;
            font-size: 30px;
            text-align: center;
            border-radius: 6px;
            cursor: pointer;
        }
        .info-container {
            width: 1080px;
            margin: 20px auto 0;
            background-color: white;
            padding: 20px;
            font-size: 24px;
            overflow: hidden;
            border: 2px solid #2196f3;
        }
        .info-container .name {
            float: left;
            width: 50%;
        }
        .info-container .tries {
            float: right;
            width: 50%;
            text-align: right;
        }
        .memory-game-blocks {
            display: flex;
            width: 1100px;
            flex-wrap: wrap;
            margin: 20px auto;
        }
        .memory-game-blocks.no-clicking {
            pointer-events: none;
        }
        .memory-game-blocks .game-block {
            height: 200px;
            transition: transform .5s;
            transform-style: preserve-3d;
            cursor: pointer;
            position: relative;
            flex: 1 0 200px;
            margin: 0 10px 20px;
        }
        .memory-game-blocks .game-block .front {
            background-color: #d8a272;
            line-height: 200px;
        }
        .memory-game-blocks .game-block .front:before {
            content: '!';
            color: #FFF;
            font-size: 140px;
            font-weight: bold;
        }
        .memory-game-blocks .game-block .back {
            background-color: #607D8B;
            transform: rotateY(180deg);
        }
        .memory-game-blocks .game-block .back img {
            width: 140px;
            height: 140px;
            margin-top: 30px;
        }
        .memory-game-blocks .game-block .face {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            backface-visibility: hidden;
            border: 3px solid #e3bc9a;
        }
        .memory-game-blocks .game-block.is-flipped,
        .memory-game-blocks .game-block.has-match {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            transform: rotateY(180deg);
            pointer-events: none;
        }
        .win-message {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #4CAF50;
            color: #FFF;
            padding: 20px 40px;
            font-size: 30px;
            text-align: center;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="control-buttons">
        <span>Start Game</span>
    </div>
    <div class="info-container">
        <div class="name">
            Hello: <span></span>
        </div>
        <div class="tries">
            Wrong Tries: <span>0</span>
        </div>
    </div>
    <div class="memory-game-blocks">
        <div class="game-block" data-technology="angular">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://www.youregypttours.com/storage/896/1676280121.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="angular">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://www.youregypttours.com/storage/896/1676280121.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="vuejs">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://cdn.kastatic.org/ka-content-images/8f5e18d555a0952eec2e75bfa93ee82f70bc8831.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="vuejs">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://cdn.kastatic.org/ka-content-images/8f5e18d555a0952eec2e75bfa93ee82f70bc8831.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="css3">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://cnn-arabic-images.cnn.io/cloudinary/image/upload/w_1920,c_scale,q_auto/cnnarabic/2020/05/24/images/155459.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="css3">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://cnn-arabic-images.cnn.io/cloudinary/image/upload/w_1920,c_scale,q_auto/cnnarabic/2020/05/24/images/155459.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="github">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Cairo_-_Coptic_area_-_Roman_Tower.JPG" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="github">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Cairo_-_Coptic_area_-_Roman_Tower.JPG" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="gulpjs">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://www.arabcont.com/Images/ProjectImage/MaryGerges02.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="gulpjs">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://www.arabcont.com/Images/ProjectImage/MaryGerges02.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="html5">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://www.cairo24.com/UploadCache/libfiles/92/5/600x338o/244.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="html5">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://www.cairo24.com/UploadCache/libfiles/92/5/600x338o/244.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="jest">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Cairo%2C_chiesa_di_san_sergio_01.JPG/300px-Cairo%2C_chiesa_di_san_sergio_01.JPG" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="jest">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Cairo%2C_chiesa_di_san_sergio_01.JPG/300px-Cairo%2C_chiesa_di_san_sergio_01.JPG" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="mongodb">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1upo38VB2xxGH9sJW93IM3HB9mD6yAhGtwA&s" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="mongodb">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1upo38VB2xxGH9sJW93IM3HB9mD6yAhGtwA&s" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="python">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://www.sis.gov.eg/Content/Upload/slider/42022201133364.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="python">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://www.sis.gov.eg/Content/Upload/slider/42022201133364.jpg" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="react">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://qph.cf2.quoracdn.net/main-qimg-24682e599f4e0d70580fbde3a9d0851c-lq" alt="">
            </div>
        </div>
        <div class="game-block" data-technology="react">
            <div class="face front"></div>
            <div class="face back">
                <img decoding="async" src="https://qph.cf2.quoracdn.net/main-qimg-24682e599f4e0d70580fbde3a9d0851c-lq" alt="">
            </div>
        </div>
    </div>
    <div class="win-message">
        Congratulations! You Won!
    </div>
    <audio id="win-sound" src="{{ asset("audio\success-1-6297.mp3")}}"></audio>
    <script>
        // Helper Function To Create Range Of Numbers
        function createRange(start, end) {
            let arrayOfNumbers = [];
            for (let i = start; i <= end; i++) {
                arrayOfNumbers.push(i);
            }
            return arrayOfNumbers;
        }

        // Shuffle Function
        function shuffle(array) {
            let current = array.length,
                temp,
                random;
            while (current > 0) {
                random = Math.floor(Math.random() * current);
                current--;
                temp = array[current];
                array[current] = array[random];
                array[random] = temp;
            }
            return array;
        }

        // Variables
        let duration = 1000;
        let blocksContainer = document.querySelector(".memory-game-blocks");
        let blocks = Array.from(blocksContainer.children);
        let orderRange = createRange(0, blocks.length - 1);
        shuffle(orderRange);
        blocks.forEach((block, index) => {
            block.style.order = orderRange[index];
            block.addEventListener("click", function() {
                flipBlock(block);
            });
        });

        // Flip Block Function
        function flipBlock(selectedBlock) {
            selectedBlock.classList.add("is-flipped");
            let allFlippedBlocks = blocks.filter(flippedBlock =>
                flippedBlock.classList.contains("is-flipped")
            );
            if (allFlippedBlocks.length === 2) {
                stopClicking();
                checkMatchedBlocks(allFlippedBlocks[0], allFlippedBlocks[1]);
            }
        }

        // Stop Clicking Function
        function stopClicking() {
            blocksContainer.classList.add("no-clicking");
            setTimeout(() => {
                blocksContainer.classList.remove("no-clicking");
            }, duration);
        }

        // Check Matched Block
        function checkMatchedBlocks(firstBlock, secondBlock) {
            let triesElement = document.querySelector(".tries span");
            if (firstBlock.dataset.technology === secondBlock.dataset.technology) {
                firstBlock.classList.remove("is-flipped");
                secondBlock.classList.remove("is-flipped");
                firstBlock.classList.add("has-match");
                secondBlock.classList.add("has-match");
                checkWin();
            } else {
                triesElement.innerHTML = parseInt(triesElement.innerHTML) + 1;
                setTimeout(() => {
                    firstBlock.classList.remove("is-flipped");
                    secondBlock.classList.remove("is-flipped");
                }, duration);
            }
        }

        // Check Win Function
        function checkWin() {
            let matchedBlocks = blocks.filter(block =>
                block.classList.contains("has-match")
            );
            if (matchedBlocks.length === blocks.length) {
                displayWinMessage();
            }
        }

        // Display Win Message Function
        function displayWinMessage() {
            let winMessage = document.querySelector(".win-message");
            let winSound = document.getElementById("win-sound");
            winMessage.style.display = "block";
            winSound.play();
            setTimeout(() => {
                winMessage.style.display = "none";
            }, 5000);
        }

        // Control Buttons
        document.querySelector(".control-buttons span").onclick = function() {
            let yourName = prompt("What is Your Name?");
            if (yourName == null || yourName == "") {
                document.querySelector(".name span").innerHTML = "Unknown";
            } else {
                document.querySelector(".name span").innerHTML = yourName;
            }
            document.querySelector(".control-buttons").remove();
        };
    </script>
</body>
</html>





