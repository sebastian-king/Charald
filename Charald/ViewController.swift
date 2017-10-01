//
//  ViewController.swift
//  Charald
//
//  Created by Sebastian King on 10/1/17.
//  Copyright © 2017 charald. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet weak var email: UITextField!
    @IBOutlet weak var password: UITextField!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func login_submit(_ sender: UIButton) {
        if email.text == "" || password.text == "" {
            // either textfield 1 or 2's text is empty
        }
    }
}


