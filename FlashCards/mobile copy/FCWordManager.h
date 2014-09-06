//
//  FCWordManager.h
//  FlashCards
//
//  Created by Yael Weinberg on 1/20/13.
//  Copyright (c) 2013 Yael Weinberg. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface FCWordManager : NSObject

@property (strong, nonatomic) NSMutableArray *wordsBucket;
@property (strong, nonatomic) NSMutableArray *knownWords;
@property (strong, nonatomic) NSMutableDictionary *wordToDef;
@property (strong, nonatomic) NSMutableDictionary *wordToSentence;
@property (strong, nonatomic) NSMutableDictionary *wordToScore;
@property (assign, nonatomic) int bucketIndex;

- (id) init;
- (void) addWord:(NSString *)word
    WithSentence:(NSString *) sentence
          AndDef:(NSString *) def;
- (void) incWordScore:(NSString *)word;
- (void) incCounter;
- (BOOL) isEmpty;
- (NSString *) getNextWord;
- (NSString *) getNextDef;
- (NSString *) getNextSentence;

@end
