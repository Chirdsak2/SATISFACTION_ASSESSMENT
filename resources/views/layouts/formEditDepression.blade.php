<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    .form-personnel {
        /*
    max-width: 400px;
    margin-top: 100px;
    */
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px #ccc;
    }

    #preview-image {
        max-width: 300px;
        max-height: 300px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .position-relative {
        position: relative;
    }

    .usernameFeedback {
        display: none;
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: red;
        /* font-size: 1.5rem;
        Ensure the icon is visible */
    }
</style>

<h2 class="mt-4 mb-2" align="center">ทำแบบประเมิน</h2>

<div class="d-flex justify-content-end col-11 mb-1">
    <a href="{{ route('manageDepression') }}" class="btn btn-warning ">ย้อนกลับ</a>
</div>

<div class="container form-personnel col-10 mb-5">
    <form id="userForm" action="{{ url('updateDepression', ['id' => $depression->id]) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div>
            <label for="question_1">1. คุณรู้สึกเครียดหรือวิตกกังวลบ่อยๆ หรือไม่?</label><br>
            <input type="radio" id="question_1_1" name="question_1" value="1" {{ $depression->question_1 == 1 ? 'checked' : '' }}>
            <label for="question_1_1">น้อยมาก</label><br>
            <input type="radio" id="question_1_2" name="question_1" value="2" {{ $depression->question_1 == 2 ? 'checked' : '' }}>
            <label for="question_1_2">น้อย</label><br>
            <input type="radio" id="question_1_3" name="question_1" value="3" {{ $depression->question_1 == 3 ? 'checked' : '' }}>
            <label for="question_1_3">ปานกลาง</label><br>
            <input type="radio" id="question_1_4" name="question_1" value="4" {{ $depression->question_1 == 4 ? 'checked' : '' }}>
            <label for="question_1_4">มาก</label><br>
            <input type="radio" id="question_1_5" name="question_1" value="5" {{ $depression->question_1 == 5 ? 'checked' : '' }}>
            <label for="question_1_5">มากที่สุด</label><br>
        </div>
        <div>
            <label for="question_2">2. คุณรู้สึกเศร้าหรือท้อแท้?</label><br>
            <input type="radio" id="question_2_1" name="question_2" value="1" {{ $depression->question_2 == 1 ? 'checked' : '' }}>
            <label for="question_2_1">น้อยมาก</label><br>
            <input type="radio" id="question_2_2" name="question_2" value="2" {{ $depression->question_2 == 2 ? 'checked' : '' }}>
            <label for="question_2_2">น้อย</label><br>
            <input type="radio" id="question_2_3" name="question_2" value="3" {{ $depression->question_2 == 3 ? 'checked' : '' }}>
            <label for="question_2_3">ปานกลาง</label><br>
            <input type="radio" id="question_2_4" name="question_2" value="4" {{ $depression->question_2 == 4 ? 'checked' : '' }}>
            <label for="question_2_4">มาก</label><br>
            <input type="radio" id="question_2_5" name="question_2" value="5" {{ $depression->question_2 == 5 ? 'checked' : '' }}>
            <label for="question_2_5">มากที่สุด</label><br>
        </div>
        <div>
            <label for="question_3">3. คุณรู้สึกหงุดหงิดหรือรำคาญ?</label><br>
            <input type="radio" id="question_3_1" name="question_3" value="1" {{ $depression->question_3 == 1 ? 'checked' : '' }}>
            <label for="question_3_1">น้อยมาก</label><br>
            <input type="radio" id="question_3_2" name="question_3" value="2" {{ $depression->question_3 == 2 ? 'checked' : '' }}>
            <label for="question_3_2">น้อย</label><br>
            <input type="radio" id="question_3_3" name="question_3" value="3" {{ $depression->question_3 == 3 ? 'checked' : '' }}>
            <label for="question_3_3">ปานกลาง</label><br>
            <input type="radio" id="question_3_4" name="question_3" value="4" {{ $depression->question_3 == 4 ? 'checked' : '' }}>
            <label for="question_3_4">มาก</label><br>
            <input type="radio" id="question_3_5" name="question_3" value="5" {{ $depression->question_3 == 5 ? 'checked' : '' }}>
            <label for="question_3_5">มากที่สุด</label><br>
        </div>
        <div>
            <label for="question_4">4. คุณรู้สึกว่าไม่มีค่าครู่ใดๆ หรือสึกสับสนใจเกี่ยวกับสิ่งรอบตัวบ่อยๆ
                หรือไม่?</label><br>
            <input type="radio" id="question_4_1" name="question_4" value="1" {{ $depression->question_4 == 1 ? 'checked' : '' }}>
            <label for="question_4_1">น้อยมาก</label><br>
            <input type="radio" id="question_4_2" name="question_4" value="2" {{ $depression->question_4 == 2 ? 'checked' : '' }}>
            <label for="question_4_2">น้อย</label><br>
            <input type="radio" id="question_4_3" name="question_4" value="3" {{ $depression->question_4 == 3 ? 'checked' : '' }}>
            <label for="question_4_3">ปานกลาง</label><br>
            <input type="radio" id="question_4_4" name="question_4" value="4" {{ $depression->question_4 == 4 ? 'checked' : '' }}>
            <label for="question_4_4">มาก</label><br>
            <input type="radio" id="question_4_5" name="question_4" value="5" {{ $depression->question_4 == 5 ? 'checked' : '' }}>
            <label for="question_4_5">มากที่สุด</label><br>
        </div>
        <div>
            <label for="question_5">5. คุณรู้สึกยอมรับไม่ได้หรือรู้สึกว่าชีวิตไม่มีค่าครั้งใดๆ หรือไม่?</label><br>
            <input type="radio" id="question_5_1" name="question_5" value="1" {{ $depression->question_5 == 1 ? 'checked' : '' }}>
            <label for="question_5_1">น้อยมาก</label><br>
            <input type="radio" id="question_5_2" name="question_5" value="2" {{ $depression->question_5 == 2 ? 'checked' : '' }}>
            <label for="question_5_2">น้อย</label><br>
            <input type="radio" id="question_5_3" name="question_5" value="3" {{ $depression->question_5 == 3 ? 'checked' : '' }}>
            <label for="question_5_3">ปานกลาง</label><br>
            <input type="radio" id="question_5_4" name="question_5" value="4" {{ $depression->question_5 == 4 ? 'checked' : '' }}>
            <label for="question_5_4">มาก</label><br>
            <input type="radio" id="question_5_5" name="question_5" value="5" {{ $depression->question_5 == 5 ? 'checked' : '' }}>
            <label for="question_5_5">มากที่สุด</label><br>
        </div>
        <br>
        <div>
            <label for="suggestion">ข้อเสนอแนะ</label><br>
            <textarea id="suggestion" name="suggestion" rows="4" cols="50">{{ $depression->suggestion }}</textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
