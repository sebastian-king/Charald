package com.nawfer.charald;

import android.bluetooth.BluetoothAdapter;
import android.bluetooth.BluetoothDevice;
import android.content.Intent;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

import java.util.Set;

public class SelectChat extends AppCompatActivity {

    private final static int REQUEST_ENABLE_BT = 1;
    BluetoothAdapter btAdapter;

    /*
    This view will be where bluetooth devices are scanned and chosen to
    chat with.
     */

    protected void onResume()
    {
        super.onResume();

        //Check if device has bluetooth feature
        //If not, shut down app
        btAdapter = BluetoothAdapter.getDefaultAdapter();
        if (btAdapter == null)
        {
            //If device not bluetooth enabled -> show dialog box -> shut down app
            AlertDialog.Builder builder = new AlertDialog.Builder(SelectChat.this);
            builder.setTitle("WARNING");
            builder.setMessage("Your device does not have bluetooth as a feature. "
                    + "This application requires a device with bluetooth " +
                    "capability to run");
            builder.setNegativeButton("Shut Down", (dialog, id) ->
            {
                onDestroy();
            });
        }

        //Check if bluetooth is turned on
        //If not, then open dialog box to turn it on
        if (!btAdapter.isEnabled())
        {
            Intent enableBtIntent = new Intent(BluetoothAdapter.ACTION_REQUEST_ENABLE);
            startActivityForResult(enableBtIntent, REQUEST_ENABLE_BT);
        }
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_selectchat);

    }

    private void scanButtonClick(View view)
    {
        /*Will scan for nearby bluetooth devices
        NOTE: Paired /= Connected
              (known)   (send/receive info)
          1) Query paired device
             a) Query will return name and MAC address of paired devices
             b) Can be used for previous chats
             c) Previous chats can be saved with an instance state OR .txt
                i) instance states found in "Dictionary2.0 - MainActivity"
          2) Discover Devices
        */

        //1. Query Paired Devices
        Set<BluetoothDevice> pairedDevices = btAdapter.getBondedDevices();
        if (pairedDevices.size() > 0)
        {

        }

    }
}
