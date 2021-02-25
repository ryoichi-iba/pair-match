<form action="{{ route('results.update', $result->id) }}" method="post">
    @csrf
    @method('PUT')

    <p>ペア１:</p>
    <select name="pair1_score">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>

     <p>ペア2:</p>
    <select name="pair2_score">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>


    <input type="hidden" name="tournamentId" value="">
    <button type="submit" class="btn btn-primary">作成</button>
</form>
