package com.nawfer.charald;

import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;
import android.widget.Button;

import com.nawfer.charald.R;

public class LoginActivity extends AppCompatActivity {

    Button loginButton;
    Button registerButton;
    WebView webView;
    Button tempButton;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        registerButton = (Button)findViewById(R.id.registerButton);
        loginButton = (Button)findViewById(R.id.loginButton);
        tempButton = (Button)findViewById(R.id.tempButton);

        tempButton.setOnClickListener((view) ->
        {
            Intent intent = new Intent(this, SelectChat.class);
            startActivity(intent);
        });

        registerButton.setOnClickListener((view) -> {
            /*
            String url= "https://www.charald.com/#register";
            Intent intent = new Intent(Intent.ACTION_VIEW);
            intent.setData(Uri.parse("https://www.charald.com/#register"));
            startActivity(intent);
            */
            webView.loadUrl("https://www.charald.com/#register");
        });

        loginButton.setOnClickListener((view) -> {
            webView.loadUrl("https://www.charald.com/#register");
            /*
            String url= "https://www.charald.com/#register";
            Intent intent = new Intent(Intent.ACTION_VIEW);
            intent.setData(Uri.parse("https://www.charald.com/#login"));
            startActivity(intent);
            */
        });

    }
}
