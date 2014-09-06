//
//  FCWordsViewController.h
//  FlashCards
//
//  Created by Yael Weinberg on 1/19/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "FCWordManager.h"
@interface FCWordsViewController : UIViewController
{
    IBOutlet UILabel *word;
    IBOutlet UILabel *sentence;
    IBOutlet UILabel *definition;
}
@property FCWordManager *wordManager;
- (IBAction)correct:(id)sender;
- (IBAction)next:(id)sender;
- (IBAction)showDef:(id)sender;
- (IBAction)showSentence:(id)sender;
- (void) reloadText;

@end
