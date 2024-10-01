

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<div class="fab-container">
    <div class="fab-button" id="fab-button">
        <i class="fas fa-rocket"></i>
    </div>
    <div class="fab-options" id="fab-options">
        <a href="" class="fab-option">
            <i class="fab fa-laravel"></i>
            <span class="fab-option-label">Laravel</span>
        </a>
        {{-- <a href="https://reactjs.org" class="fab-option">
            <i class="fab fa-react"></i>
            <span class="fab-option-label">React</span>
        </a>
        <a href="https://vuejs.org" class="fab-option">
            <i class="fab fa-vuejs"></i>
            <span class="fab-option-label">Vue</span>
        </a> --}}
        <a href="" class="fab-option">
            <i class="fas fa-user-secret"></i>
            <span class="fab-option-label">Cyber</span>
        </a>
        <a href="" class="fab-option">
            <i class="fas fa-paint-brush"></i>
            <span class="fab-option-label">Design</span>
        </a>
        <a href="" class="fab-option">
            <i class="fas fa-object-group"></i>
            <span class="fab-option-label">UI/UX</span>
        </a>
        <a href="" class="fab-option">
            <i class="fab fa-html5"></i>
            <span class="fab-option-label">HTML/CSS</span>
        </a>
        <!-- Tambahkan lebih banyak opsi sesuai kebutuhan -->
    </div>
</div>
<style>
    
.fab-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: flex;
    flex-direction: column-reverse;
    align-items: flex-end;
}

.fab-button {
    background-color: #004741;
    border: none;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
    color: white;
}
.fab-button i {
    font-size: 30px;
    transition: transform 0.3s;
}

.fab-button:hover i {
    transform: rotate(360deg);
}
.fab-button:hover {
    background-color: #028090;
}

.fab-button:active {
    transform: scale(0.9);
}

.fab-options {
    list-style: none;
    padding: 0;
    margin: 0;
    display: none;
    flex-direction: column-reverse;
    align-items: flex-end;
}

.fab-button:hover + .fab-options,
.fab-options:hover {
    display: flex;
}

.fab-option {
    background-color: #fff;
    border-radius: 50px;
    padding: 10px;
    display: flex;
    text-decoration: none;
    align-items: center;
    margin-bottom: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.3s, transform 0.3s;
}

.fab-button:hover + .fab-options .fab-option,
.fab-options:hover .fab-option {
    opacity: 1;
    transform: translateY(0);
    text-decoration: none;
}

.fab-option i {
    font-size: 30px;
    margin-right: 10px;
}

.fab-option-label {
    display: none;
    white-space: nowrap;
    /* background-color: #004741; */
    color: #004741;
    padding: 5px 10px;
    border-radius: 20px;
    margin-left: 10px;
    text-decoration: none;
}

.fab-option:hover .fab-option-label {
    display: inline-block;
}

.fab-option:hover {
    background-color: #D8F3DC;
}

.fab-option:active {
    transform: scale(0.95);
}
</style>