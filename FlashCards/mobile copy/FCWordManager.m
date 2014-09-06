//
//  FCWordManager.m
//  FlashCards
//
//  Created by Yael Weinberg on 1/20/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import "FCWordManager.h"
#import <Parse/Parse.h>

@implementation FCWordManager
@synthesize wordsBucket, knownWords, wordToDef, wordToSentence, wordToScore, bucketIndex;

-(id) init
{
    self = [super init];
    if (self)
    {
        wordsBucket = [[NSMutableArray alloc] init];
        knownWords = [[NSMutableArray alloc] init];
        wordToDef = [[NSMutableDictionary alloc] init];
        wordToSentence = [[NSMutableDictionary alloc] init];
        wordToScore = [[NSMutableDictionary alloc] init];
        bucketIndex = 0;
    }
    return self;
}

- (void) addWord:(NSString *)word
    WithSentence:(NSString *) sentence
          AndDef:(NSString *) def
{
    [wordsBucket addObject:word];
    [wordToDef setValue:def forKey:word];
    [wordToSentence setValue:sentence forKey:word];
    [wordToScore setValue:[NSNumber numberWithInt:0] forKey:word];
    
    PFUser *currentUser = [PFUser currentUser];
    NSString *userName = @"";
    if(currentUser)
        userName = [currentUser username];
    PFObject *qa = [PFObject objectWithClassName:@"Word"];
    [qa setObject:word forKey:@"word"];
    [qa setObject:def forKey:@"def"];
    [qa setObject:sentence forKey:@"sentence"];
    [qa setObject:[NSNumber numberWithInt:0] forKey:@"correctAnswer"];
    [qa setObject:userName forKey:@"byUser"];
    [qa saveInBackground];
}
- (void) incWordScore:(NSString *)word
{
    NSNumber *score = [wordToScore valueForKey:word];
    score = @([score intValue] +1);
    if([score intValue ] > 4)
    {
        [knownWords setValue:[wordsBucket valueForKey:word] forKey:word];
        [wordsBucket delete:word];
    }
}
- (BOOL) isEmpty
{
    return ([wordsBucket count] == 0);
}

- (void) incCounter
{
    bucketIndex++;
    if(bucketIndex == [wordsBucket count])
        bucketIndex = 0;
}
- (NSString *) getNextWord
{
    if([self isEmpty])
        return @"Empty vocabulary";
    return [wordsBucket objectAtIndex:bucketIndex];
}
- (NSString *) getNextDef
{
    if([self isEmpty])
        return @"";
    return [wordToDef valueForKey:[wordsBucket objectAtIndex:bucketIndex]];
}
- (NSString *) getNextSentence
{
    if([self isEmpty])
        return @"";
    return [wordToSentence valueForKey:[wordsBucket objectAtIndex:bucketIndex]];
}
@end
