<h1 class="title is-1">Register Page</h1>
<form>
    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input class="input" type="text" name="name" placeholder="Name">
        </div>
    </div>

    <div class="field">
        <label class="label">Username</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" name="username" placeholder="UserName">
            <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span>
        </div>
        <p class="help is-success">This username is available</p>
    </div>
    <div class="field">
        <label class="label">Password</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="password" name="password" placeholder="password">
        </div>
    </div>
    <div class="field">
        <label class="label">Confirm Password</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="password" name="password_confirm" placeholder="confirm password">
        </div>
    </div>

    <div class="field">
        <label class="label">Email</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="email" name="email" placeholder="Hello@email.com">
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
            </span>
        </div>
        <p class="help is-danger">This email is invalid</p>
    </div>
    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
    </div>
</form>