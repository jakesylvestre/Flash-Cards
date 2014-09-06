//
//  FCKnowViewController.h
//  FlashCards
//
//  Created by Yael Weinberg on 1/20/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "FCWordManager.h"
@interface FCKnowViewController : UIViewController
{
    IBOutlet UITableView *table;
}
@property FCWordManager *wordManager;
@end
