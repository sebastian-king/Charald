//
//  ViewController.swift
//  Charald
//
//  Created by Sebastian King on 10/1/17.
//  Copyright © 2017 charald. All rights reserved.
//

import UIKit
import Foundation

/*
 let url = URL(string: "https://www.charald.com/test-get.txt")
 let task = URLSession.shared.dataTask(with: url!) {(data, response, error) in
 let str = String(data: data!, encoding: String.Encoding.utf8) as String!;
 self.status_label.text = str;
 }
 task.resume() */

class ViewController: UIViewController {
    
    @IBOutlet weak var email: UITextField!
    @IBOutlet weak var password: UITextField!
    
    @IBOutlet weak var status_label: UILabel!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func login_submit(_ sender: UIButton) {
        if (email.text == "") {
            status_label.text = "You must enter your e-mail address.";
        } else if (password.text == "") {
            status_label.text = "You must enter your password."
        } else {
            self.status_label.text = "Loading..."
            var request = URLRequest(url:URL(string:"https://www.charald.com/post-test.php")!)
            request.httpMethod = "POST"
            
            let params = ["email":email.text, "password":password.text]
            request.httpBody = try? JSONSerialization.data(withJSONObject: params, options: [])
            request.addValue("application/json", forHTTPHeaderField: "Content-Type")
            
            let task = URLSession.shared.dataTask(with: request) { (data:Data?, response:URLResponse?, error:Error?) in
                let str = String(data: data!, encoding: String.Encoding.utf8) as String!;
                self.status_label.text = str;
            }
            task.resume()
        }
    }
}
