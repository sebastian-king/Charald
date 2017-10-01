package com.nawfer.charald;

import android.bluetooth.BluetoothAdapter;
import android.bluetooth.BluetoothDevice;
import android.content.BroadcastReceiver;
import android.content.Context;
import android.content.Intent;
import android.content.IntentFilter;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

import java.util.Set;

public class SelectChat extends AppCompatActivity {

    //Declare views
    Button scanButton;

    private final static int REQUEST_ENABLE_BT = 1;  //Request number for turning on bluetooth at the start
    private final static int ACTION_FOUND = 1;       //Request number for detecting a device
    private BluetoothAdapter btAdapter;              //Checks for bluetooth on/off/null
    private Set<BluetoothDevice> pairedDevices;      //Set of devices already paired - unmodifiable except by Android itself
    //private BroadcastReceiver receiver;            //Will receive info over bluetooth, created after devices found

    /*
    This view will be where bluetooth devices are scanned and chosen to
    chat with.
    */

    BroadcastReceiver receiver = new BroadcastReceiver() {
        public void onReceive(Context context, Intent intent) {
            String action = intent.getAction();
            if (BluetoothDevice.ACTION_FOUND.equals(action))
            {
                BluetoothDevice device = (BluetoothDevice)intent.getParcelableExtra(BluetoothDevice.EXTRA_DEVICE);
                Toast.makeText(SelectChat.this, "MAC Address: " + device.getAddress(), Toast.LENGTH_SHORT).show();
            }
        }
    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_selectchat);

        //Initialize views (declared at top)
        scanButton = (Button) findViewById(R.id.scanButton);

        //Check if device has bluetooth feature
        //If not, shut down app
        btAdapter = BluetoothAdapter.getDefaultAdapter();
        if (btAdapter == null) {
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
        if (!btAdapter.isEnabled()) {
            Intent enableBtIntent = new Intent(BluetoothAdapter.ACTION_REQUEST_ENABLE);
            startActivityForResult(enableBtIntent, REQUEST_ENABLE_BT);
        }

        scanButton.setOnClickListener((view) ->
        {
            Toast.makeText(this, "Scanning", Toast.LENGTH_SHORT).show();
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

            //1) Query Paired Devices
            //   Iterate through and add them to map "PairedDevices"
            //// TODO: 9/30/2017  - Figure out what to do with set of paired devices
            pairedDevices = btAdapter.getBondedDevices();
            if (pairedDevices.size() > 0) {
                for (BluetoothDevice device : pairedDevices) {
                    String deviceName = device.getName();
                    String deviceHardwareAddress = device.getAddress();
                }
            }

            //2. Discover devices
            IntentFilter filterIntent = new IntentFilter(BluetoothDevice.ACTION_FOUND);

            registerReceiver(receiver, filterIntent);
            btAdapter.startDiscovery();
        });
    }

    //Create BroadcastReceiver for ACTION_FOUND
    //NOTE: Lambda will not work, don't try again


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
    protected void onStop()
    {
        unregisterReceiver(receiver);
        super.onStop();
    }

}
