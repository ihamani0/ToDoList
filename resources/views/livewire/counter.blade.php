<div >

    <form wire:submit="createUser" >
        <input wire:model="name" type="text" name="name" placeholder="name her..."/>
        <input wire:model="email" type="email" name="name" placeholder="name her..."/>
        <input wire:model="password"  type="password" name="name" placeholder="name her..."/>
        <button type="submit" >Save</button>
    </form>
    <hr>
    @foreach($users as $user)
        <h3>{{$user->email}}</h3>
        _______________________
    @endforeach

    <div>
        {{$users->links()}}
    </div>
</div>
