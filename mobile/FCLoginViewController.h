//
//  FCLoginViewController.h
//  FlashCards
//
//  Created by Yael Weinberg on 1/19/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface FCLoginViewController : UIViewController
<UITextFieldDelegate>
{
    IBOutlet UITextField *name;
    IBOutlet UITextField *teacher;
    IBOutlet UITextField *phone;
    IBOutlet UITextField *email;
}

- (IBAction) login:(id)sender;
- (IBAction) registerUser:(id)sender;
- (IBAction) logout:(id)sender;
- (void) clear;

@end

