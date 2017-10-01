package com.nawfer.charald;


import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;
import java.io.BufferedOutputStream;
import java.io.IOException;
import java.io.OutputStream;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.ProtocolException;
import java.net.URL;

/**
 * A login screen that offers login via email/password.
 */
public class LoginActivity extends AppCompatActivity {

    private EditText emailET;
    private EditText passwordET;
    private Button loginButton;
    private String emailAttempt;
    private String passwordAttempt;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        emailET = (EditText) findViewById(R.id.emailET);
        passwordET = (EditText)findViewById(R.id.passwordET);
        loginButton = (Button)findViewById(R.id.loginButton2);
        emailAttempt = emailET.getText().toString();
        passwordAttempt = passwordET.getText().toString();

        loginButton.setOnClickListener((view) ->
        {
            //Take directly to SelectClass.java
            //// TODO: 10/1/2017 Login Authentication
            Intent intent = new Intent(this, SelectChat.class);
            startActivity(intent);
        });



    }

    //HTTP Post Request to Seb's server
    private int isLoginValid(String emailAttempt, String passwordAttempt)
    {
        return 0;
    }


}

